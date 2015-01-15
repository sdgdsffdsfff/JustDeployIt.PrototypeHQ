function AtechIdentity() {
  
  this.host = '';
  this.userKey = null;
  this.applicationKey = null;
  this.expiry = null;
  this.authHash = null;
  this.userData = {};
  
  // Attempt to load the identity bar by inserting the appropriate javascript
  // into the page. We may change this one day to cache but for now the same
  // JS will be inserted into every page.
  this.getRemoteUserData = function(success) {
    _this = this;
    var url = this.host + "/remote/user_data.js?";
    url += "user=" + this.userKey;
    url += "&app=" + this.applicationKey;
    url += "&expiry=" + this.expiry;
    url += "&hash=" + this.authHash;
    url += "&callback=atechIdentity.receiveUserData";
    
    
    _this.displayIdentityBarShell();
    $(document).ready(function() {
      $('<script type="text/javascript" src="' + url + '" />').appendTo('body');
    });
  }
  
  // Receives a remote payload, stores it and dispatches as appropriate to the next
  // required function.
  this.receiveUserData = function(userData) {
    this.userData = userData;
    this.populateIdentityBar();
  }
  
  // Display an aTech Identity bar shell without any information within it. 
  this.displayIdentityBarShell = function() {
    // Add the stylesheet required for the Identity Bar. We may wish to 
    // load this as an inline style to avoid the extra HTTP request.
    var head = document.getElementsByTagName('head')[0],
        link = document.createElement('link');
    link.type = 'text/css';
    link.rel = 'stylesheet';
    link.href = this.host + '/assets/css/bar.css';
    head.appendChild(link);
    
    // Generate the markup for the bar for this user
    var barDiv = document.createElement('div');
    barDiv.id = 'atechIdentityBar';
    barDiv.style.display = 'none';
    var title = document.createElement('h1');
    var link = document.createElement('a');
    link.href = '#';
    link.appendChild(document.createTextNode('Your Account'));
    title.appendChild(link);
    barDiv.appendChild(title);
    document.getElementsByTagName('body')[0].appendChild(barDiv)
  }
  
  // Accept a user's JSON payload and contruct and insert the appropriate markup
  // needed to display the identity bar on this page. If one already exists,
  // remove it just before inserting the new entry.  
  this.populateIdentityBar = function() {
    _this = this;
    
    // Don't display the bar if the user doesn't want to see it.
    if(!this.userData.display_bar) return
    
    
    
    // Generate a string of assignments
    var assignmentsHtml = "";
    assignmentsHtml += "<ul class='apps'>";
    
    var tempAppAssignments = new Array;
    $(this.userData.assignments).each(function(i, assignment) {
      if(!_this.userData.assignments[i + 1] || _this.userData.assignments[i + 1].application.identifier != assignment.application.identifier) {
        assignmentsHtml += "<li class='app'>"
        assignmentsHtml += "<a href='" + _this.switchUrlFor(assignment.identifier) + "' class='root' style='color:" + assignment.application.colour + "'>" + assignment.application.name + "</a>"
        if(tempAppAssignments.length) {
          tempAppAssignments.push(assignment);
          assignmentsHtml += "<ul class='assignments'>";
          $(tempAppAssignments).each(function(i, tempAssignment) {
            assignmentsHtml += "<li><a href='" + _this.switchUrlFor(tempAssignment.identifier) + "'>" + tempAssignment.label + "</a></li>"
          });
          assignmentsHtml += "</ul>";
        }
        assignmentsHtml += "</li>"
        tempAppAssignments = new Array;
      } else {
        tempAppAssignments.push(assignment);
      }
    });
    
    assignmentsHtml += "<li class='utility profile'><a title='Edit account' class='link' href='" + this.profileUrl() + "'>Profile</a></li>";
    assignmentsHtml += "<li class='utility support'><a title='Contact support' href='mailto:support@atechmedia.com'>Support</a></li>";
    assignmentsHtml += "<li class='utility blog'><a title='Read our blog' href='http://atechmedia.com/blog' target='_blank'>Blog</a></li>";
    assignmentsHtml += "</ul>";
    
    
    $(assignmentsHtml).appendTo('#atechIdentityBar');
    this.initializeBar();
  }
  
  // Generate a url for an assignment switch
  this.switchUrlFor = function(identifier) {
    if(this.host.length) {
      return "/identity/switch/" + identifier;
    } else {
      return "/switch/" + identifier;
    }
  }
  
  // Generate a url to use to access the profile page
  this.profileUrl = function() {
    return (this.host.length ? "/identity/manage" : "/edit");
  }
  
  
  // Set up any actions which should be carried out for the newly inserted bar. Return
  // values are unimportant.
  this.initializeBar = function() {
    var atechIdentityBar = $('div#atechIdentityBar');
    var atechIdentityBarCloser;
    if(atechIdentityBar.length) {
      $(atechIdentityBar).hover(function() {
        atechIdentityBar.data('desiredPosition', 'open');
        if(!atechIdentityBar.data('currentAction') || atechIdentityBar.data('currentAction') == 'closed') {
          if(!atechIdentityBar.data('initialWidth')) { atechIdentityBar.data('initialWidth', atechIdentityBar.css('width'));  }
          atechIdentityBar.data('currentAction', 'opening');
          atechIdentityBar.animate({width:'100%', right:0, 'border-top-left-radius': 0, 'border-top-right-radius':0}, 200, function() {
            $('ul.apps', atechIdentityBar).fadeIn(100);
            atechIdentityBar.data('currentAction', 'open');
          });        
        }
      }, function() {
        atechIdentityBar.data('desiredPosition', 'closed');
        if(atechIdentityBarCloser) { clearInterval(atechIdentityBarCloser); };
        atechIdentityBarCloser = setInterval(function() {
          clearInterval(atechIdentityBarCloser);
          if(atechIdentityBar.data('desiredPosition') == 'closed') {
            $('ul.apps li.app ul').hide();
            $('ul.apps li a.root').removeClass('active');
            atechIdentityBar.data('currentAction', 'closing');
            $('ul.apps', atechIdentityBar).fadeOut(200);
            $('div.profileEdit', atechIdentityBar).fadeOut(200);
            atechIdentityBar.animate({width:atechIdentityBar.data('initialWidth'), right:'30px', 'border-top-left-radius': '5px', 'border-top-right-radius':'5px'}, 400, function() {
              atechIdentityBar.data('currentAction', 'closed');
            });
          }
        }, 3500)
      })

      // When hovering on an application, display an item
      $('ul.apps li.app').hover(function() {
        $(this).find('ul').show();
        $(this).find('> a').addClass('active');

      }, function() {
        $(this).find('ul').hide();
        $(this).find('> a').removeClass('active');
      });
      
      // When hovering on a utility link, display the tooltip
      $('ul.apps li.utility a').hover(function() {
        var title = $(this).attr('title');
        var tooltipMarkup = "<p id='identityTooltip'>" + title + "</p>";
        var offset = $(this).offset();
        var tooltip = $(tooltipMarkup).appendTo('body')
        tooltip.css('top', offset.top - 30).css('left', offset.left - 40);
      }, function() {
        $('p#identityTooltip').remove();
      });
    }
  }
  
}
