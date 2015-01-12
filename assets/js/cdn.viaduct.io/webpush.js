(function () {
    var WebPush;
    WebPush = function () {
        function WebPush(t, n) {
            null == n && (n = {}), this.token = t, this.sessionID = null, this.bindings = {}, this.channels = {}, this.options = n, this.connect()
        }

        return WebPush.transports = ["WebSocketTransport", "AJAXPollTransport"], WebPush.log = function () {
        }, WebPush.prototype.connect = function (transport) {
            return WebPush.transports[0] ? (WebPush.log("Connecting using first transport: " + WebPush.transports[0]), transport = eval("WebPush." + WebPush.transports[0]), this.transport = new transport(this), this.transport.connect()) : (WebPush.log("No transports are available to connect with."), this.transport_failure(null))
        }, WebPush.prototype.transport_failure = function (transport) {
            var next_transport, next_transport_index;
            return transport ? (WebPush.log("" + transport.constructor.name + " has failed."), next_transport_index = WebPush.transports.indexOf(transport.constructor.name), next_transport_index >= 0 && (next_transport = WebPush.transports[next_transport_index + 1]) ? (WebPush.log("Trying " + next_transport + " transport"), next_transport = eval("WebPush." + next_transport), this.transport = new next_transport(this), this.transport.connect()) : this.dispatch(null, "vwp:unsupported", {})) : this.dispatch(null, "vwp:unsupported", {})
        }, WebPush.prototype.subscribe = function (t) {
            return WebPush.log("Requesting subscription to " + t), new WebPush.Channel(this, t)
        }, WebPush.prototype.bind = function (t, n) {
            var e;
            return (e = this.bindings)[t] || (e[t] = new Array), this.bindings[t].push(n)
        }, WebPush.prototype.send = function (t, n) {
            return this.transport ? this.transport.send(t, n) : void 0
        }, WebPush.prototype.dispatch = function (t, n, e) {
            var s;
            return WebPush.log("Dispatching `" + n + "` on `" + (t ? t.name : "global") + "` channel (" + JSON.stringify(e) + ")"), s = this.bindings[n] || [], t && (s = s.concat(this.bindings["*"] || []), s = s.concat(t.bindings[n] || [])), WebPush.Util.each(s, function (s) {
                return s.call(null, e || {}, t, n)
            })
        }, WebPush
    }(), window.WebPush = WebPush
}).call(this), function () {
    WebPush.Util = {
        each: function (t, n) {
            var e, s, o, i;
            for (i = [], s = 0, o = t.length; o > s; s++)e = t[s], i.push(n.call(e, e));
            return i
        }, ajax: function (t) {
            var n;
            return t.method || (t.method = "POST"), n = new XMLHttpRequest, n.onreadystatechange = function (e) {
                return function () {
                    if (4 === n.readyState)if (200 === n.status) {
                        if (t.success)return t.success.call(e, JSON.parse(n.responseText))
                    } else if (t.failure)return t.failure.call(e, n.responseText)
                }
            }(this), n.open(t.method, t.url, !0), n.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), n.send(this.encodeParams(t.params || {}))
        }, encodeParams: function (t) {
            var n, e, s;
            n = new Array;
            for (e in t)s = t[e], null !== s && n.push(encodeURIComponent(e) + "=" + encodeURIComponent(s));
            return n.join("&")
        }
    }
}.call(this), function () {
    WebPush.Channel = function () {
        function t(t, n) {
            this.client = t, this.name = n, this.bindings = {}, this.subscribed = !1, this.signature = null, this["private"] = n.match(/^private\-/) ? !0 : !1, this.subscribe()
        }

        return t.prototype.bind = function (t, n) {
            var e;
            return (e = this.bindings)[t] || (e[t] = new Array), this.bindings[t].push(n)
        }, t.prototype.subscribe = function () {
            return this.client.transport && this.client.transport.connected && this.client.transport.subscribe(this), this.client.channels[this.name] = this
        }, t.prototype.beforeSubscribe = function (t) {
            var n;
            return this["private"] ? (n = this.client.options.authEndPoint || "/webpush/auth", WebPush.log("Requesting auth token for `" + this.name + "` from " + n), WebPush.Util.ajax({
                url: n,
                params: {session_id: this.client.sessionID, channel: this.name},
                success: function (n) {
                    return function (e) {
                        return WebPush.log("Got auth token for `" + n.name + "`: " + e.auth), n.signature = e.auth, t ? t.call(n) : void 0
                    }
                }(this)
            })) : t ? t.call(this) : void 0
        }, t
    }()
}.call(this), function () {
    WebPush.Transport = function () {
        function t(t) {
            this.client = t, this.setup()
        }

        return t.prototype.setup = function () {
            return !0
        }, t.prototype.connect = function () {
            return !0
        }, t.prototype.send = function (t, n) {
            return null == n && (n = {}), !0
        }, t.prototype.subscribe = function (t) {
            return t.beforeSubscribe()
        }, t
    }()
}.call(this), function () {
    var t = {}.hasOwnProperty, n = function (n, e) {
        function s() {
            this.constructor = n
        }

        for (var o in e)t.call(e, o) && (n[o] = e[o]);
        return s.prototype = e.prototype, n.prototype = new s, n.__super__ = e.prototype, n
    };
    WebPush.WebSocketTransport = function (t) {
        function e() {
            return e.__super__.constructor.apply(this, arguments)
        }

        return n(e, t), e.host = "wss://webpush.viaduct.io/vwp/socket", e.prototype.setup = function () {
            return this.connection_attempts = 0, this.success = !1, this.connected = !1, this.last_seen = null, this.pinger = null, this.ping_interval = 15
        }, e.prototype.connect = function () {
            return "undefined" == typeof WebSocket ? this.client.transport_failure(this) : (this.connection_attempts += 1, this.client.dispatch(null, "vwp:connecting", {attempts: this.connection_attempts}), this.connection = new WebSocket("" + this.constructor.host + "/" + this.client.token), this.connection.onopen = function (t) {
                return function () {
                    return WebPush.log("[socket] Socket opened to " + t.connection.url), t.connected = !0
                }
            }(this), this.connection.onmessage = function (t) {
                return function (n) {
                    var e, s, o;
                    if (n = JSON.parse(n.data), "vwp:connected" === n.event) {
                        t.success = !0, t.client.sessionID = n.data.session_id, WebPush.log("[socket] Received connected event, set session ID to " + t.client.sessionID), o = t.client.channels;
                        for (s in o)e = o[s], t.subscribe(e), e.subscribed = !0;
                        t.startPinging()
                    }
                    return "vwp:error" === n.event && WebPush.log("Remote error event: " + n.data.error), t.client.dispatch(t.client.channels[n.channel], n.event, n.data), t.last_seen = new Date
                }
            }(this), this.connection.onclose = function (t) {
                return function () {
                    return WebPush.log("[socket] Connection closed"), t.stopPinging(), t.connected && t.client.dispatch(null, "vwp:disconnected", {}), t.connected = !1, t.success && t.connection_attempts < 10 ? (WebPush.log("[socket] Success noted and connection attempts < 10. Re-connecting in 5s"), setTimeout(function () {
                        return t.connect()
                    }, 5e3)) : (WebPush.log("[socket] No success on WebSockets. Failing now..."), t.client.transport_failure(t))
                }
            }(this))
        }, e.prototype.subscribe = function (t) {
            return t.beforeSubscribe(function (n) {
                return function () {
                    return n.send("vwp:subscribe", {channel: t.name, signature: t.signature})
                }
            }(this)), !0
        }, e.prototype.send = function (t, n) {
            var e;
            return null == n && (n = {}), this.connected ? (e = JSON.stringify({event: t, data: n}), WebPush.log("[socket] Sending `" + e + "`"), this.connection.send(e), !0) : !1
        }, e.prototype.startPinging = function () {
            return WebPush.log("[socket] Starting pinger"), this.pinger = setInterval(function (t) {
                return function () {
                    return t.send("vwp:ping")
                }
            }(this), 1e3 * this.ping_interval)
        }, e.prototype.stopPinging = function () {
            return this.pinger ? (WebPush.log("[socket] Stopping pinger"), clearInterval(this.pinger), !0) : !1
        }, e
    }(WebPush.Transport)
}.call(this), function () {
    var t = {}.hasOwnProperty, n = function (n, e) {
        function s() {
            this.constructor = n
        }

        for (var o in e)t.call(e, o) && (n[o] = e[o]);
        return s.prototype = e.prototype, n.prototype = new s, n.__super__ = e.prototype, n
    };
    WebPush.AJAXPollTransport = function (t) {
        function e() {
            return e.__super__.constructor.apply(this, arguments)
        }

        return n(e, t), e.host = "https://webpush.viaduct.io/vwp/api", e.disabled = !1, e.prototype.setup = function () {
            return this.last_since = null, this.connected = !1, this.connection_attempts = 0, this.seen_channels = []
        }, e.prototype.connect = function () {
            return this.constructor.disabled ? (WebPush.log("[ajaxpoll] AJAX Polling is disabled."), transport_failure(this)) : this.getMessages()
        }, e.prototype.subscribe = function (t) {
            return t.beforeSubscribe()
        }, e.prototype.getMessages = function () {
            var t, n, e, s;
            n = {}, s = this.client.channels;
            for (e in s)t = s[e], n[e] = t.signature;
            return WebPush.log("[ajaxpoll] Getting latest messages for channels:"), WebPush.log(n), WebPush.Util.ajax({
                url: "" + this.constructor.host + "/messages",
                params: {token: this.client.token, since: this.last_since, session_id: this.client.sessionID, channel: JSON.stringify(n)},
                success: function (n) {
                    return function (s) {
                        var o, i, r, c, u, a, h, p, l;
                        if (!n.connected) {
                            n.connected = !0, n.client.sessionID = s.s, WebPush.log("[ajaxpoll] Connected OK, setting session to " + n.client.sessionID), n.client.dispatch(null, "vwp:connected", {session_id: s.s}), h = n.client.channels;
                            for (e in h)t = h[e], n.subscribe(t)
                        }
                        for (p = s.c, r = 0, u = p.length; u > r; r++)o = p[r], -1 === n.seen_channels.indexOf(o) && (n.seen_channels.push(o), n.client.dispatch(t, "vwp:subscribed", {channel: o}));
                        for (n.last_since = s.ns, n.connection_attempts = 0, l = s.m, c = 0, a = l.length; a > c; c++)i = l[c], n.client.dispatch(n.client.channels[i.channel], i.event, i.data || {});
                        return setTimeout(function () {
                            return n.getMessages()
                        }, 2e3)
                    }
                }(this),
                failure: function (t) {
                    return function (n) {
                        return t.connected && t.client.dispatch(null, "vwp:disconnected", {session_id: n.session_id}), t.connected = !1, t.last_since && t.connection_attempts < 10 ? (t.connection_attempts += 1, setTimeout(function () {
                            return t.getMessages()
                        }, 2e3)) : t.client.transport_failure(t)
                    }
                }(this)
            })
        }, e
    }(WebPush.Transport)
}.call(this);