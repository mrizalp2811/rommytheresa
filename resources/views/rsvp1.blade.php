<!DOCTYPE html>
<html>
  <!-- Mirrored from www.theknot.com/us/rommy-darmawan-and-theresa-aldeva-oct-2021/photos by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Sep 2021 15:27:39 GMT -->
  <!-- Added by HTTrack -->
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <!-- /Added by HTTrack -->
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <script type="text/javascript">
      window.NREUM || (NREUM = {}), __nr_require = function(t, e, n) {
        function r(n) {
          if (!e[n]) {
            var o = e[n] = {
              exports: {}
            };
            t[n][0].call(o.exports, function(e) {
              var o = t[n][1][e];
              return r(o || e)
            }, o, o.exports)
          }
          return e[n].exports
        }
        if ("function" == typeof __nr_require) return __nr_require;
        for (var o = 0; o < n.length; o++) r(n[o]);
        return r
      }({
        1: [function(t, e, n) {
          function r(t) {
            try {
              s.console && console.log(t)
            } catch (e) {}
          }
          var o, i = t("ee"),
            a = t(25),
            s = {};
          try {
            o = localStorage.getItem("__nr_flags").split(","), console && "function" == typeof console.log && (s.console = !0, o.indexOf("dev") !== -1 && (s.dev = !0), o.indexOf("nr_dev") !== -1 && (s.nrDev = !0))
          } catch (c) {}
          s.nrDev && i.on("internal-error", function(t) {
            r(t.stack)
          }), s.dev && i.on("fn-err", function(t, e, n) {
            r(n.stack)
          }), s.dev && (r("NR AGENT IN DEVELOPMENT MODE"), r("flags: " + a(s, function(t, e) {
            return t
          }).join(", ")))
        }, {}],
        2: [function(t, e, n) {
          function r(t, e, n, r, s) {
            try {
              l ? l -= 1 : o(s || new UncaughtException(t, e, n), !0)
            } catch (f) {
              try {
                i("ierr", [f, c.now(), !0])
              } catch (d) {}
            }
            return "function" == typeof u && u.apply(this, a(arguments))
          }

          function UncaughtException(t, e, n) {
            this.message = t || "Uncaught error with no additional information", this.sourceURL = e, this.line = n
          }

          function o(t, e) {
            var n = e ? null : c.now();
            i("err", [t, n])
          }
          var i = t("handle"),
            a = t(26),
            s = t("ee"),
            c = t("loader"),
            f = t("gos"),
            u = window.onerror,
            d = !1,
            p = "nr@seenError",
            l = 0;
          c.features.err = !0, t(1), window.onerror = r;
          try {
            throw new Error
          } catch (h) {
            "stack" in h && (t(13), t(12), "addEventListener" in window && t(6), c.xhrWrappable && t(14), d = !0)
          }
          s.on("fn-start", function(t, e, n) {
            d && (l += 1)
          }), s.on("fn-err", function(t, e, n) {
            d && !n[p] && (f(n, p, function() {
              return !0
            }), this.thrown = !0, o(n))
          }), s.on("fn-end", function() {
            d && !this.thrown && l > 0 && (l -= 1)
          }), s.on("internal-error", function(t) {
            i("ierr", [t, c.now(), !0])
          })
        }, {}],
        3: [function(t, e, n) {
          t("loader").features.ins = !0
        }, {}],
        4: [function(t, e, n) {
          function r() {
            L++, C = g.hash, this[u] = y.now()
          }

          function o() {
            L--, g.hash !== C && i(0, !0);
            var t = y.now();
            this[h] = ~~this[h] + t - this[u], this[d] = t
          }

          function i(t, e) {
            E.emit("newURL", ["" + g, e])
          }

          function a(t, e) {
            t.on(e, function() {
              this[e] = y.now()
            })
          }
          var s = "-start",
            c = "-end",
            f = "-body",
            u = "fn" + s,
            d = "fn" + c,
            p = "cb" + s,
            l = "cb" + c,
            h = "jsTime",
            m = "fetch",
            v = "addEventListener",
            w = window,
            g = w.location,
            y = t("loader");
          if (w[v] && y.xhrWrappable) {
            var x = t(10),
              b = t(11),
              E = t(8),
              O = t(6),
              R = t(13),
              P = t(7),
              T = t(14),
              N = t(9),
              M = t("ee"),
              S = M.get("tracer");
            t(16), y.features.spa = !0;
            var C, L = 0;
            M.on(u, r), M.on(p, r), M.on(d, o), M.on(l, o), M.buffer([u, d, "xhr-done", "xhr-resolved"]), O.buffer([u]), R.buffer(["setTimeout" + c, "clearTimeout" + s, u]), T.buffer([u, "new-xhr", "send-xhr" + s]), P.buffer([m + s, m + "-done", m + f + s, m + f + c]), E.buffer(["newURL"]), x.buffer([u]), b.buffer(["propagate", p, l, "executor-err", "resolve" + s]), S.buffer([u, "no-" + u]), N.buffer(["new-jsonp", "cb-start", "jsonp-error", "jsonp-end"]), a(T, "send-xhr" + s), a(M, "xhr-resolved"), a(M, "xhr-done"), a(P, m + s), a(P, m + "-done"), a(N, "new-jsonp"), a(N, "jsonp-end"), a(N, "cb-start"), E.on("pushState-end", i), E.on("replaceState-end", i), w[v]("hashchange", i, !0), w[v]("load", i, !0), w[v]("popstate", function() {
              i(0, L > 1)
            }, !0)
          }
        }, {}],
        5: [function(t, e, n) {
          function r(t) {}
          if (window.performance && window.performance.timing && window.performance.getEntriesByType) {
            var o = t("ee"),
              i = t("handle"),
              a = t(13),
              s = t(12),
              c = "learResourceTimings",
              f = "addEventListener",
              u = "resourcetimingbufferfull",
              d = "bstResource",
              p = "resource",
              l = "-start",
              h = "-end",
              m = "fn" + l,
              v = "fn" + h,
              w = "bstTimer",
              g = "pushState",
              y = t("loader");
            y.features.stn = !0, t(8), "addEventListener" in window && t(6);
            var x = NREUM.o.EV;
            o.on(m, function(t, e) {
              var n = t[0];
              n instanceof x && (this.bstStart = y.now())
            }), o.on(v, function(t, e) {
              var n = t[0];
              n instanceof x && i("bst", [n, e, this.bstStart, y.now()])
            }), a.on(m, function(t, e, n) {
              this.bstStart = y.now(), this.bstType = n
            }), a.on(v, function(t, e) {
              i(w, [e, this.bstStart, y.now(), this.bstType])
            }), s.on(m, function() {
              this.bstStart = y.now()
            }), s.on(v, function(t, e) {
              i(w, [e, this.bstStart, y.now(), "requestAnimationFrame"])
            }), o.on(g + l, function(t) {
              this.time = y.now(), this.startPath = location.pathname + location.hash
            }), o.on(g + h, function(t) {
              i("bstHist", [location.pathname + location.hash, this.startPath, this.time])
            }), f in window.performance && (window.performance["c" + c] ? window.performance[f](u, function(t) {
              i(d, [window.performance.getEntriesByType(p)]), window.performance["c" + c]()
            }, !1) : window.performance[f]("webkit" + u, function(t) {
              i(d, [window.performance.getEntriesByType(p)]), window.performance["webkitC" + c]()
            }, !1)), document[f]("scroll", r, {
              passive: !0
            }), document[f]("keypress", r, !1), document[f]("click", r, !1)
          }
        }, {}],
        6: [function(t, e, n) {
          function r(t) {
            for (var e = t; e && !e.hasOwnProperty(u);) e = Object.getPrototypeOf(e);
            e && o(e)
          }

          function o(t) {
            s.inPlace(t, [u, d], "-", i)
          }

          function i(t, e) {
            return t[1]
          }
          var a = t("ee").get("events"),
            s = t("wrap-function")(a, !0),
            c = t("gos"),
            f = XMLHttpRequest,
            u = "addEventListener",
            d = "removeEventListener";
          e.exports = a, "getPrototypeOf" in Object ? (r(document), r(window), r(f.prototype)) : f.prototype.hasOwnProperty(u) && (o(window), o(f.prototype)), a.on(u + "-start", function(t, e) {
            var n = t[1],
              r = c(n, "nr@wrapped", function() {
                function t() {
                  if ("function" == typeof n.handleEvent) return n.handleEvent.apply(n, arguments)
                }
                var e = {
                  object: t,
                  "function": n
                } [typeof n];
                return e ? s(e, "fn-", null, e.name || "anonymous") : n
              });
            this.wrapped = t[1] = r
          }), a.on(d + "-start", function(t) {
            t[1] = this.wrapped || t[1]
          })
        }, {}],
        7: [function(t, e, n) {
          function r(t, e, n) {
            var r = t[e];
            "function" == typeof r && (t[e] = function() {
              var t = i(arguments),
                e = {};
              o.emit(n + "before-start", [t], e);
              var a;
              e[m] && e[m].dt && (a = e[m].dt);
              var s = r.apply(this, t);
              return o.emit(n + "start", [t, a], s), s.then(function(t) {
                return o.emit(n + "end", [null, t], s), t
              }, function(t) {
                throw o.emit(n + "end", [t], s), t
              })
            })
          }
          var o = t("ee").get("fetch"),
            i = t(26),
            a = t(25);
          e.exports = o;
          var s = window,
            c = "fetch-",
            f = c + "body-",
            u = ["arrayBuffer", "blob", "json", "text", "formData"],
            d = s.Request,
            p = s.Response,
            l = s.fetch,
            h = "prototype",
            m = "nr@context";
          d && p && l && (a(u, function(t, e) {
            r(d[h], e, f), r(p[h], e, f)
          }), r(s, "fetch", c), o.on(c + "end", function(t, e) {
            var n = this;
            if (e) {
              var r = e.headers.get("content-length");
              null !== r && (n.rxSize = r), o.emit(c + "done", [null, e], n)
            } else o.emit(c + "done", [t], n)
          }))
        }, {}],
        8: [function(t, e, n) {
          var r = t("ee").get("history"),
            o = t("wrap-function")(r);
          e.exports = r;
          var i = window.history && window.history.constructor && window.history.constructor.prototype,
            a = window.history;
          i && i.pushState && i.replaceState && (a = i), o.inPlace(a, ["pushState", "replaceState"], "-")
        }, {}],
        9: [function(t, e, n) {
          function r(t) {
            function e() {
              c.emit("jsonp-end", [], p), t.removeEventListener("load", e, !1), t.removeEventListener("error", n, !1)
            }

            function n() {
              c.emit("jsonp-error", [], p), c.emit("jsonp-end", [], p), t.removeEventListener("load", e, !1), t.removeEventListener("error", n, !1)
            }
            var r = t && "string" == typeof t.nodeName && "script" === t.nodeName.toLowerCase();
            if (r) {
              var o = "function" == typeof t.addEventListener;
              if (o) {
                var a = i(t.src);
                if (a) {
                  var u = s(a),
                    d = "function" == typeof u.parent[u.key];
                  if (d) {
                    var p = {};
                    f.inPlace(u.parent, [u.key], "cb-", p), t.addEventListener("load", e, !1), t.addEventListener("error", n, !1), c.emit("new-jsonp", [t.src], p)
                  }
                }
              }
            }
          }

          function o() {
            return "addEventListener" in window
          }

          function i(t) {
            var e = t.match(u);
            return e ? e[1] : null
          }

          function a(t, e) {
            var n = t.match(p),
              r = n[1],
              o = n[3];
            return o ? a(o, e[r]) : e[r]
          }

          function s(t) {
            var e = t.match(d);
            return e && e.length >= 3 ? {
              key: e[2],
              parent: a(e[1], window)
            } : {
              key: t,
              parent: window
            }
          }
          var c = t("ee").get("jsonp"),
            f = t("wrap-function")(c);
          if (e.exports = c, o()) {
            var u = /[?&](?:callback|cb)=([^&#]+)/,
              d = /(.*)\.([^.]+)/,
              p = /^(\w+)(\.|$)(.*)$/,
              l = ["appendChild", "insertBefore", "replaceChild"];
            Node && Node.prototype && Node.prototype.appendChild ? f.inPlace(Node.prototype, l, "dom-") : (f.inPlace(HTMLElement.prototype, l, "dom-"), f.inPlace(HTMLHeadElement.prototype, l, "dom-"), f.inPlace(HTMLBodyElement.prototype, l, "dom-")), c.on("dom-start", function(t) {
              r(t[0])
            })
          }
        }, {}],
        10: [function(t, e, n) {
          var r = t("ee").get("mutation"),
            o = t("wrap-function")(r),
            i = NREUM.o.MO;
          e.exports = r, i && (window.MutationObserver = function(t) {
            return this instanceof i ? new i(o(t, "fn-")) : i.apply(this, arguments)
          }, MutationObserver.prototype = i.prototype)
        }, {}],
        11: [function(t, e, n) {
          function r(t) {
            var e = a.context(),
              n = s(t, "executor-", e),
              r = new f(n);
            return a.context(r).getCtx = function() {
              return e
            }, a.emit("new-promise", [r, e], e), r
          }

          function o(t, e) {
            return e
          }
          var i = t("wrap-function"),
            a = t("ee").get("promise"),
            s = i(a),
            c = t(25),
            f = NREUM.o.PR;
          e.exports = a, f && (window.Promise = r, ["all", "race"].forEach(function(t) {
            var e = f[t];
            f[t] = function(n) {
              function r(t) {
                return function() {
                  a.emit("propagate", [null, !o], i), o = o || !t
                }
              }
              var o = !1;
              c(n, function(e, n) {
                Promise.resolve(n).then(r("all" === t), r(!1))
              });
              var i = e.apply(f, arguments),
                s = f.resolve(i);
              return s
            }
          }), ["resolve", "reject"].forEach(function(t) {
            var e = f[t];
            f[t] = function(t) {
              var n = e.apply(f, arguments);
              return t !== n && a.emit("propagate", [t, !0], n), n
            }
          }), f.prototype["catch"] = function(t) {
            return this.then(null, t)
          }, f.prototype = Object.create(f.prototype, {
            constructor: {
              value: r
            }
          }), c(Object.getOwnPropertyNames(f), function(t, e) {
            try {
              r[e] = f[e]
            } catch (n) {}
          }), a.on("executor-start", function(t) {
            t[0] = s(t[0], "resolve-", this), t[1] = s(t[1], "resolve-", this)
          }), a.on("executor-err", function(t, e, n) {
            t[1](n)
          }), s.inPlace(f.prototype, ["then"], "then-", o), a.on("then-start", function(t, e) {
            this.promise = e, t[0] = s(t[0], "cb-", this), t[1] = s(t[1], "cb-", this)
          }), a.on("then-end", function(t, e, n) {
            this.nextPromise = n;
            var r = this.promise;
            a.emit("propagate", [r, !0], n)
          }), a.on("cb-end", function(t, e, n) {
            a.emit("propagate", [n, !0], this.nextPromise)
          }), a.on("propagate", function(t, e, n) {
            this.getCtx && !e || (this.getCtx = function() {
              if (t instanceof Promise) var e = a.context(t);
              return e && e.getCtx ? e.getCtx() : this
            })
          }), r.toString = function() {
            return "" + f
          })
        }, {}],
        12: [function(t, e, n) {
          var r = t("ee").get("raf"),
            o = t("wrap-function")(r),
            i = "equestAnimationFrame";
          e.exports = r, o.inPlace(window, ["r" + i, "mozR" + i, "webkitR" + i, "msR" + i], "raf-"), r.on("raf-start", function(t) {
            t[0] = o(t[0], "fn-")
          })
        }, {}],
        13: [function(t, e, n) {
          function r(t, e, n) {
            t[0] = a(t[0], "fn-", null, n)
          }

          function o(t, e, n) {
            this.method = n, this.timerDuration = isNaN(t[1]) ? 0 : +t[1], t[0] = a(t[0], "fn-", this, n)
          }
          var i = t("ee").get("timer"),
            a = t("wrap-function")(i),
            s = "setTimeout",
            c = "setInterval",
            f = "clearTimeout",
            u = "-start",
            d = "-";
          e.exports = i, a.inPlace(window, [s, "setImmediate"], s + d), a.inPlace(window, [c], c + d), a.inPlace(window, [f, "clearImmediate"], f + d), i.on(c + u, r), i.on(s + u, o)
        }, {}],
        14: [function(t, e, n) {
          function r(t, e) {
            d.inPlace(e, ["onreadystatechange"], "fn-", s)
          }

          function o() {
            var t = this,
              e = u.context(t);
            t.readyState > 3 && !e.resolved && (e.resolved = !0, u.emit("xhr-resolved", [], t)), d.inPlace(t, g, "fn-", s)
          }

          function i(t) {
            y.push(t), h && (b ? b.then(a) : v ? v(a) : (E = -E, O.data = E))
          }

          function a() {
            for (var t = 0; t < y.length; t++) r([], y[t]);
            y.length && (y = [])
          }

          function s(t, e) {
            return e
          }

          function c(t, e) {
            for (var n in t) e[n] = t[n];
            return e
          }
          t(6);
          var f = t("ee"),
            u = f.get("xhr"),
            d = t("wrap-function")(u),
            p = NREUM.o,
            l = p.XHR,
            h = p.MO,
            m = p.PR,
            v = p.SI,
            w = "readystatechange",
            g = ["onload", "onerror", "onabort", "onloadstart", "onloadend", "onprogress", "ontimeout"],
            y = [];
          e.exports = u;
          var x = window.XMLHttpRequest = function(t) {
            var e = new l(t);
            try {
              u.emit("new-xhr", [e], e), e.addEventListener(w, o, !1)
            } catch (n) {
              try {
                u.emit("internal-error", [n])
              } catch (r) {}
            }
            return e
          };
          if (c(l, x), x.prototype = l.prototype, d.inPlace(x.prototype, ["open", "send"], "-xhr-", s), u.on("send-xhr-start", function(t, e) {
              r(t, e), i(e)
            }), u.on("open-xhr-start", r), h) {
            var b = m && m.resolve();
            if (!v && !m) {
              var E = 1,
                O = document.createTextNode(E);
              new h(a).observe(O, {
                characterData: !0
              })
            }
          } else f.on("fn-end", function(t) {
            t[0] && t[0].type === w || a()
          })
        }, {}],
        15: [function(t, e, n) {
          function r(t) {
            if (!i(t)) return null;
            var e = window.NREUM;
            if (!e.loader_config) return null;
            var n = (e.loader_config.accountID || "").toString() || null,
              r = (e.loader_config.agentID || "").toString() || null,
              s = (e.loader_config.trustKey || "").toString() || null;
            if (!n || !r) return null;
            var c = a.generateCatId(),
              f = a.generateCatId(),
              u = Date.now(),
              d = o(c, f, u, n, r, s);
            return {
              header: d,
              guid: c,
              traceId: f,
              timestamp: u
            }
          }

          function o(t, e, n, r, o, i) {
            var a = "btoa" in window && "function" == typeof window.btoa;
            if (!a) return null;
            var s = {
              v: [0, 1],
              d: {
                ty: "Browser",
                ac: r,
                ap: o,
                id: t,
                tr: e,
                ti: n
              }
            };
            return i && r !== i && (s.d.tk = i), btoa(JSON.stringify(s))
          }

          function i(t) {
            var e = !1,
              n = !1,
              r = {};
            if ("init" in NREUM && "distributed_tracing" in NREUM.init && (r = NREUM.init.distributed_tracing, n = !!r.enabled), n)
              if (t.sameOrigin) e = !0;
              else if (r.allowed_origins instanceof Array)
              for (var o = 0; o < r.allowed_origins.length; o++) {
                var i = s(r.allowed_origins[o]);
                if (t.hostname === i.hostname && t.protocol === i.protocol && t.port === i.port) {
                  e = !0;
                  break
                }
              }
            return n && e
          }
          var a = t(23),
            s = t(17);
          e.exports = {
            generateTracePayload: r,
            shouldGenerateTrace: i
          }
        }, {}],
        16: [function(t, e, n) {
          function r(t) {
            var e = this.params,
              n = this.metrics;
            if (!this.ended) {
              this.ended = !0;
              for (var r = 0; r < p; r++) t.removeEventListener(d[r], this.listener, !1);
              e.aborted || (n.duration = a.now() - this.startTime, this.loadCaptureCalled || 4 !== t.readyState ? null == e.status && (e.status = 0) : i(this, t), n.cbTime = this.cbTime, u.emit("xhr-done", [t], t), s("xhr", [e, n, this.startTime]))
            }
          }

          function o(t, e) {
            var n = c(e),
              r = t.params;
            r.host = n.hostname + ":" + n.port, r.pathname = n.pathname, t.parsedOrigin = c(e), t.sameOrigin = t.parsedOrigin.sameOrigin
          }

          function i(t, e) {
            t.params.status = e.status;
            var n = v(e, t.lastSize);
            if (n && (t.metrics.rxSize = n), t.sameOrigin) {
              var r = e.getResponseHeader("X-NewRelic-App-Data");
              r && (t.params.cat = r.split(", ").pop())
            }
            t.loadCaptureCalled = !0
          }
          var a = t("loader");
          if (a.xhrWrappable) {
            var s = t("handle"),
              c = t(17),
              f = t(15).generateTracePayload,
              u = t("ee"),
              d = ["load", "error", "abort", "timeout"],
              p = d.length,
              l = t("id"),
              h = t(21),
              m = t(20),
              v = t(18),
              w = window.XMLHttpRequest;
            a.features.xhr = !0, t(14), t(7), u.on("new-xhr", function(t) {
              var e = this;
              e.totalCbs = 0, e.called = 0, e.cbTime = 0, e.end = r, e.ended = !1, e.xhrGuids = {}, e.lastSize = null, e.loadCaptureCalled = !1, t.addEventListener("load", function(n) {
                i(e, t)
              }, !1), h && (h > 34 || h < 10) || window.opera || t.addEventListener("progress", function(t) {
                e.lastSize = t.loaded
              }, !1)
            }), u.on("open-xhr-start", function(t) {
              this.params = {
                method: t[0]
              }, o(this, t[1]), this.metrics = {}
            }), u.on("open-xhr-end", function(t, e) {
              "loader_config" in NREUM && "xpid" in NREUM.loader_config && this.sameOrigin && e.setRequestHeader("X-NewRelic-ID", NREUM.loader_config.xpid);
              var n = f(this.parsedOrigin);
              n && n.header && (e.setRequestHeader("newrelic", n.header), this.dt = n)
            }), u.on("send-xhr-start", function(t, e) {
              var n = this.metrics,
                r = t[0],
                o = this;
              if (n && r) {
                var i = m(r);
                i && (n.txSize = i)
              }
              this.startTime = a.now(), this.listener = function(t) {
                try {
                  "abort" !== t.type || o.loadCaptureCalled || (o.params.aborted = !0), ("load" !== t.type || o.called === o.totalCbs && (o.onloadCalled || "function" != typeof e.onload)) && o.end(e)
                } catch (n) {
                  try {
                    u.emit("internal-error", [n])
                  } catch (r) {}
                }
              };
              for (var s = 0; s < p; s++) e.addEventListener(d[s], this.listener, !1)
            }), u.on("xhr-cb-time", function(t, e, n) {
              this.cbTime += t, e ? this.onloadCalled = !0 : this.called += 1, this.called !== this.totalCbs || !this.onloadCalled && "function" == typeof n.onload || this.end(n)
            }), u.on("xhr-load-added", function(t, e) {
              var n = "" + l(t) + !!e;
              this.xhrGuids && !this.xhrGuids[n] && (this.xhrGuids[n] = !0, this.totalCbs += 1)
            }), u.on("xhr-load-removed", function(t, e) {
              var n = "" + l(t) + !!e;
              this.xhrGuids && this.xhrGuids[n] && (delete this.xhrGuids[n], this.totalCbs -= 1)
            }), u.on("addEventListener-end", function(t, e) {
              e instanceof w && "load" === t[0] && u.emit("xhr-load-added", [t[1], t[2]], e)
            }), u.on("removeEventListener-end", function(t, e) {
              e instanceof w && "load" === t[0] && u.emit("xhr-load-removed", [t[1], t[2]], e)
            }), u.on("fn-start", function(t, e, n) {
              e instanceof w && ("onload" === n && (this.onload = !0), ("load" === (t[0] && t[0].type) || this.onload) && (this.xhrCbStart = a.now()))
            }), u.on("fn-end", function(t, e) {
              this.xhrCbStart && u.emit("xhr-cb-time", [a.now() - this.xhrCbStart, this.onload, e], e)
            }), u.on("fetch-before-start", function(t) {
              var e, n = t[1] || {};
              "string" == typeof t[0] ? e = t[0] : t[0] && t[0].url && (e = t[0].url), e && (this.parsedOrigin = c(e), this.sameOrigin = this.parsedOrigin.sameOrigin);
              var r = f(this.parsedOrigin);
              if (r && r.header) {
                var o = r.header;
                if ("string" == typeof t[0]) {
                  var i = {};
                  for (var a in n) i[a] = n[a];
                  i.headers = new Headers(n.headers || {}), i.headers.set("newrelic", o), this.dt = r, t.length > 1 ? t[1] = i : t.push(i)
                } else t[0] && t[0].headers && (t[0].headers.append("newrelic", o), this.dt = r)
              }
            })
          }
        }, {}],
        17: [function(t, e, n) {
          var r = {};
          e.exports = function(t) {
            if (t in r) return r[t];
            var e = document.createElement("a"),
              n = window.location,
              o = {};
            e.href = t, o.port = e.port;
            var i = e.href.split("://");
            !o.port && i[1] && (o.port = i[1].split("https://www.theknot.com/")[0].split("@").pop().split(":")[1]), o.port && "0" !== o.port || (o.port = "https" === i[0] ? "443" : "80"), o.hostname = e.hostname || n.hostname, o.pathname = e.pathname, o.protocol = i[0], "/" !== o.pathname.charAt(0) && (o.pathname = "/" + o.pathname);
            var a = !e.protocol || ":" === e.protocol || e.protocol === n.protocol,
              s = e.hostname === document.domain && e.port === n.port;
            return o.sameOrigin = a && (!e.hostname || s), "/" === o.pathname && (r[t] = o), o
          }
        }, {}],
        18: [function(t, e, n) {
          function r(t, e) {
            var n = t.responseType;
            return "json" === n && null !== e ? e : "arraybuffer" === n || "blob" === n || "json" === n ? o(t.response) : "text" === n || "document" === n || "" === n || void 0 === n ? o(t.responseText) : void 0
          }
          var o = t(20);
          e.exports = r
        }, {}],
        19: [function(t, e, n) {
          function r() {}

          function o(t, e, n) {
            return function() {
              return i(t, [f.now()].concat(s(arguments)), e ? null : this, n), e ? void 0 : this
            }
          }
          var i = t("handle"),
            a = t(25),
            s = t(26),
            c = t("ee").get("tracer"),
            f = t("loader"),
            u = NREUM;
          "undefined" == typeof window.newrelic && (newrelic = u);
          var d = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"],
            p = "api-",
            l = p + "ixn-";
          a(d, function(t, e) {
            u[e] = o(p + e, !0, "api")
          }), u.addPageAction = o(p + "addPageAction", !0), u.setCurrentRouteName = o(p + "routeName", !0), e.exports = newrelic, u.interaction = function() {
            return (new r).get()
          };
          var h = r.prototype = {
            createTracer: function(t, e) {
              var n = {},
                r = this,
                o = "function" == typeof e;
              return i(l + "tracer", [f.now(), t, n], r),
                function() {
                  if (c.emit((o ? "" : "no-") + "fn-start", [f.now(), r, o], n), o) try {
                    return e.apply(this, arguments)
                  } catch (t) {
                    throw c.emit("fn-err", [arguments, this, t], n), t
                  } finally {
                    c.emit("fn-end", [f.now()], n)
                  }
                }
            }
          };
          a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function(t, e) {
            h[e] = o(l + e)
          }), newrelic.noticeError = function(t, e) {
            "string" == typeof t && (t = new Error(t)), i("err", [t, f.now(), !1, e])
          }
        }, {}],
        20: [function(t, e, n) {
          e.exports = function(t) {
            if ("string" == typeof t && t.length) return t.length;
            if ("object" == typeof t) {
              if ("undefined" != typeof ArrayBuffer && t instanceof ArrayBuffer && t.byteLength) return t.byteLength;
              if ("undefined" != typeof Blob && t instanceof Blob && t.size) return t.size;
              if (!("undefined" != typeof FormData && t instanceof FormData)) try {
                return JSON.stringify(t).length
              } catch (e) {
                return
              }
            }
          }
        }, {}],
        21: [function(t, e, n) {
          var r = 0,
            o = navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);
          o && (r = +o[1]), e.exports = r
        }, {}],
        22: [function(t, e, n) {
          function r(t, e) {
            var n = t.getEntries();
            n.forEach(function(t) {
              "first-paint" === t.name ? c("timing", ["fp", Math.floor(t.startTime)]) : "first-contentful-paint" === t.name && c("timing", ["fcp", Math.floor(t.startTime)])
            })
          }

          function o(t, e) {
            var n = t.getEntries();
            n.length > 0 && c("lcp", [n[n.length - 1]])
          }

          function i(t) {
            if (t instanceof u && !p) {
              var e, n = Math.round(t.timeStamp);
              e = n > 1e12 ? Date.now() - n : f.now() - n, p = !0, c("timing", ["fi", n, {
                type: t.type,
                fid: e
              }])
            }
          }
          if (!("init" in NREUM && "page_view_timing" in NREUM.init && "enabled" in NREUM.init.page_view_timing && NREUM.init.page_view_timing.enabled === !1)) {
            var a, s, c = t("handle"),
              f = t("loader"),
              u = NREUM.o.EV;
            if ("PerformanceObserver" in window && "function" == typeof window.PerformanceObserver) {
              a = new PerformanceObserver(r), s = new PerformanceObserver(o);
              try {
                a.observe({
                  entryTypes: ["paint"]
                }), s.observe({
                  entryTypes: ["largest-contentful-paint"]
                })
              } catch (d) {}
            }
            if ("addEventListener" in document) {
              var p = !1,
                l = ["click", "keydown", "mousedown", "pointerdown", "touchstart"];
              l.forEach(function(t) {
                document.addEventListener(t, i, !1)
              })
            }
          }
        }, {}],
        23: [function(t, e, n) {
          function r() {
            function t() {
              return e ? 15 & e[n++] : 16 * Math.random() | 0
            }
            var e = null,
              n = 0,
              r = window.crypto || window.msCrypto;
            r && r.getRandomValues && (e = r.getRandomValues(new Uint8Array(31)));
            for (var o, i = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx", a = "", s = 0; s < i.length; s++) o = i[s], "x" === o ? a += t().toString(16) : "y" === o ? (o = 3 & t() | 8, a += o.toString(16)) : a += o;
            return a
          }

          function o() {
            function t() {
              return e ? 15 & e[n++] : 16 * Math.random() | 0
            }
            var e = null,
              n = 0,
              r = window.crypto || window.msCrypto;
            r && r.getRandomValues && Uint8Array && (e = r.getRandomValues(new Uint8Array(31)));
            for (var o = [], i = 0; i < 16; i++) o.push(t().toString(16));
            return o.join("")
          }
          e.exports = {
            generateUuid: r,
            generateCatId: o
          }
        }, {}],
        24: [function(t, e, n) {
          function r(t, e) {
            if (!o) return !1;
            if (t !== o) return !1;
            if (!e) return !0;
            if (!i) return !1;
            for (var n = i.split("."), r = e.split("."), a = 0; a < r.length; a++)
              if (r[a] !== n[a]) return !1;
            return !0
          }
          var o = null,
            i = null,
            a = /Version\/(\S+)\s+Safari/;
          if (navigator.userAgent) {
            var s = navigator.userAgent,
              c = s.match(a);
            c && s.indexOf("Chrome") === -1 && s.indexOf("Chromium") === -1 && (o = "Safari", i = c[1])
          }
          e.exports = {
            agent: o,
            version: i,
            match: r
          }
        }, {}],
        25: [function(t, e, n) {
          function r(t, e) {
            var n = [],
              r = "",
              i = 0;
            for (r in t) o.call(t, r) && (n[i] = e(r, t[r]), i += 1);
            return n
          }
          var o = Object.prototype.hasOwnProperty;
          e.exports = r
        }, {}],
        26: [function(t, e, n) {
          function r(t, e, n) {
            e || (e = 0), "undefined" == typeof n && (n = t ? t.length : 0);
            for (var r = -1, o = n - e || 0, i = Array(o < 0 ? 0 : o); ++r < o;) i[r] = t[e + r];
            return i
          }
          e.exports = r
        }, {}],
        27: [function(t, e, n) {
          e.exports = {
            exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart
          }
        }, {}],
        ee: [function(t, e, n) {
          function r() {}

          function o(t) {
            function e(t) {
              return t && t instanceof r ? t : t ? c(t, s, i) : i()
            }

            function n(n, r, o, i) {
              if (!p.aborted || i) {
                t && t(n, r, o);
                for (var a = e(o), s = m(n), c = s.length, f = 0; f < c; f++) s[f].apply(a, r);
                var d = u[y[n]];
                return d && d.push([x, n, r, a]), a
              }
            }

            function l(t, e) {
              g[t] = m(t).concat(e)
            }

            function h(t, e) {
              var n = g[t];
              if (n)
                for (var r = 0; r < n.length; r++) n[r] === e && n.splice(r, 1)
            }

            function m(t) {
              return g[t] || []
            }

            function v(t) {
              return d[t] = d[t] || o(n)
            }

            function w(t, e) {
              f(t, function(t, n) {
                e = e || "feature", y[n] = e, e in u || (u[e] = [])
              })
            }
            var g = {},
              y = {},
              x = {
                on: l,
                addEventListener: l,
                removeEventListener: h,
                emit: n,
                get: v,
                listeners: m,
                context: e,
                buffer: w,
                abort: a,
                aborted: !1
              };
            return x
          }

          function i() {
            return new r
          }

          function a() {
            (u.api || u.feature) && (p.aborted = !0, u = p.backlog = {})
          }
          var s = "nr@context",
            c = t("gos"),
            f = t(25),
            u = {},
            d = {},
            p = e.exports = o();
          p.backlog = u
        }, {}],
        gos: [function(t, e, n) {
          function r(t, e, n) {
            if (o.call(t, e)) return t[e];
            var r = n();
            if (Object.defineProperty && Object.keys) try {
              return Object.defineProperty(t, e, {
                value: r,
                writable: !0,
                enumerable: !1
              }), r
            } catch (i) {}
            return t[e] = r, r
          }
          var o = Object.prototype.hasOwnProperty;
          e.exports = r
        }, {}],
        handle: [function(t, e, n) {
          function r(t, e, n, r) {
            o.buffer([t], r), o.emit(t, e, n)
          }
          var o = t("ee").get("handle");
          e.exports = r, r.ee = o
        }, {}],
        id: [function(t, e, n) {
          function r(t) {
            var e = typeof t;
            return !t || "object" !== e && "function" !== e ? -1 : t === window ? 0 : a(t, i, function() {
              return o++
            })
          }
          var o = 1,
            i = "nr@id",
            a = t("gos");
          e.exports = r
        }, {}],
        loader: [function(t, e, n) {
          function r() {
            if (!E++) {
              var t = b.info = NREUM.info,
                e = l.getElementsByTagName("script")[0];
              if (setTimeout(u.abort, 3e4), !(t && t.licenseKey && t.applicationID && e)) return u.abort();
              f(y, function(e, n) {
                t[e] || (t[e] = n)
              }), c("mark", ["onload", a() + b.offset], null, "api");
              var n = l.createElement("script");
              n.src = "https://" + t.agent, e.parentNode.insertBefore(n, e)
            }
          }

          function o() {
            "complete" === l.readyState && i()
          }

          function i() {
            c("mark", ["domContent", a() + b.offset], null, "api")
          }

          function a() {
            return O.exists && performance.now ? Math.round(performance.now()) : (s = Math.max((new Date).getTime(), s)) - b.offset
          }
          var s = (new Date).getTime(),
            c = t("handle"),
            f = t(25),
            u = t("ee"),
            d = t(24),
            p = window,
            l = p.document,
            h = "addEventListener",
            m = "attachEvent",
            v = p.XMLHttpRequest,
            w = v && v.prototype;
          NREUM.o = {
            ST: setTimeout,
            SI: p.setImmediate,
            CT: clearTimeout,
            XHR: v,
            REQ: p.Request,
            EV: p.Event,
            PR: p.Promise,
            MO: p.MutationObserver
          };
          var g = "" + location,
            y = {
              beacon: "bam.nr-data.net",
              errorBeacon: "bam.nr-data.net",
              agent: "js-agent.newrelic.com/nr-spa-1167.min.js"
            },
            x = v && w && w[h] && !/CriOS/.test(navigator.userAgent),
            b = e.exports = {
              offset: s,
              now: a,
              origin: g,
              features: {},
              xhrWrappable: x,
              userAgent: d
            };
          t(19), t(22), l[h] ? (l[h]("DOMContentLoaded", i, !1), p[h]("load", r, !1)) : (l[m]("onreadystatechange", o), p[m]("onload", r)), c("mark", ["firstbyte", s], null, "api");
          var E = 0,
            O = t(27)
        }, {}],
        "wrap-function": [function(t, e, n) {
          function r(t) {
            return !(t && t instanceof Function && t.apply && !t[a])
          }
          var o = t("ee"),
            i = t(26),
            a = "nr@original",
            s = Object.prototype.hasOwnProperty,
            c = !1;
          e.exports = function(t, e) {
            function n(t, e, n, o) {
              function nrWrapper() {
                var r, a, s, c;
                try {
                  a = this, r = i(arguments), s = "function" == typeof n ? n(r, a) : n || {}
                } catch (f) {
                  p([f, "", [r, a, o], s])
                }
                u(e + "start", [r, a, o], s);
                try {
                  return c = t.apply(a, r)
                } catch (d) {
                  throw u(e + "err", [r, a, d], s), d
                } finally {
                  u(e + "end", [r, a, c], s)
                }
              }
              return r(t) ? t : (e || (e = ""), nrWrapper[a] = t, d(t, nrWrapper), nrWrapper)
            }

            function f(t, e, o, i) {
              o || (o = "");
              var a, s, c, f = "-" === o.charAt(0);
              for (c = 0; c < e.length; c++) s = e[c], a = t[s], r(a) || (t[s] = n(a, f ? s + o : o, i, s))
            }

            function u(n, r, o) {
              if (!c || e) {
                var i = c;
                c = !0;
                try {
                  t.emit(n, r, o, e)
                } catch (a) {
                  p([a, n, r, o])
                }
                c = i
              }
            }

            function d(t, e) {
              if (Object.defineProperty && Object.keys) try {
                var n = Object.keys(t);
                return n.forEach(function(n) {
                  Object.defineProperty(e, n, {
                    get: function() {
                      return t[n]
                    },
                    set: function(e) {
                      return t[n] = e, e
                    }
                  })
                }), e
              } catch (r) {
                p([r])
              }
              for (var o in t) s.call(t, o) && (e[o] = t[o]);
              return e
            }

            function p(e) {
              try {
                t.emit("internal-error", e)
              } catch (n) {}
            }
            return t || (t = o), n.inPlace = f, n.flag = a, n
          }
        }, {}]
      }, {}, ["loader", 2, 16, 5, 3, 4]);;
      NREUM.loader_config = {
        accountID: "1170120",
        trustKey: "1041",
        agentID: "351593549",
        licenseKey: "da771d87c0",
        applicationID: "351593549"
      };
      NREUM.info = {
        beacon: "bam.nr-data.net",
        errorBeacon: "bam.nr-data.net",
        licenseKey: "da771d87c0",
        applicationID: "351593549",
        sa: 1
      }
    </script>
    <script class="ot-sdk-show-settings" id="Union__consent-management__snippet">
      window.UnionConsentManagement = function() {
        window.OnetrustActiveGroups = ",C0001,C0002,C0003,C0004,C0005,", window.OneTrust = {
          ToggleInfoDisplay: function() {},
          OnConsentChanged: function() {}
        };
        var t = "Necessary",
          i = "Analytic",
          r = "Personalisation",
          c = "Targeting",
          s = "Social",
          a = {
            C0001: t,
            C0002: i,
            C0003: r,
            C0004: c,
            C0005: s
          },
          e = "not_loaded",
          o = !1,
          u = [],
          d = {};

        function f(n) {
          var e = l.getConsentedCategories(),
            o = Object.keys(a).map(function(n) {
              return a[n]
            });
          n.setup({
            consentedToAll: o.every(function(n) {
              return 0 <= e.indexOf(n)
            }),
            consentedToAny: o.filter(function(n) {
              return n !== t
            }).some(function(n) {
              return 0 <= e.indexOf(n)
            }),
            consentedToNecessary: 0 <= e.indexOf(t),
            consentedToAnalytic: 0 <= e.indexOf(i),
            consentedToPersonalisation: 0 <= e.indexOf(r),
            consentedToTargeting: 0 <= e.indexOf(c),
            consentedToSocial: 0 <= e.indexOf(s),
            consentedTo: function() {
              return Array.prototype.slice.call(arguments).every(function(n) {
                return 0 <= e.indexOf(n)
              })
            },
            categories: e
          })
        }

        function g(n, e) {
          if (n === t || o && l.consentedTo(n)) return e();
          d[n].push(e)
        }
        d[t] = [], d[i] = [], d[r] = [], d[c] = [];
        var l = {
          version: "0.5.5",
          consentPlatformEnabled: !(d[s] = []),
          registerService: function(n) {
            o && f(n), u.push(n)
          },
          getConsentedCategories: function() {
            return (window.OnetrustActiveGroups || ",C0001,").split(",").filter(function(n) {
              return n && a[n]
            }).map(function(n) {
              return a[n]
            })
          },
          togglePreferencesModal: function() {
            e = "changing", OneTrust.ToggleInfoDisplay(), OneTrust.OnConsentChanged(function() {
              window.location.reload()
            })
          },
          consentedTo: function(n) {
            return 0 <= l.getConsentedCategories().indexOf(n)
          },
          onConsentedToNecessary: function(n) {
            return g(t, n)
          },
          onConsentedToAnalytic: function(n) {
            return g(i, n)
          },
          onConsentedToPersonalisation: function(n) {
            return g(r, n)
          },
          onConsentedToTargeting: function(n) {
            return g(c, n)
          },
          onConsentedToSocial: function(n) {
            return g(s, n)
          }
        };
        return window.OptanonWrapper = function() {
          var n;
          o = !0, "loading" !== (e = "not_loaded" === (n = e) ? "loading" : "loading" === n ? "changing" : "done") && "changing" !== e || u.forEach(function(n) {
            f(n)
          }), l.getConsentedCategories().forEach(function(n) {
            d[n].forEach(function(n) {
              n()
            }), d[n] = []
          })
        }, window.OptanonWrapper(), l
      }()
    </script>
    <script type="text/javascript">
      ! function() {
        var i = window.analytics = window.analytics || [];
        if (!i.initialize)
          if (i.invoked) window.console && console.error && console.error("Segment snippet included twice.");
          else {
            i.invoked = !0, i.methods = ["trackSubmit", "trackClick", "trackLink", "trackForm", "pageview", "identify", "reset", "group", "track", "ready", "alias", "debug", "page", "once", "off", "on", "addSourceMiddleware", "addIntegrationMiddleware", "setAnonymousId", "addDestinationMiddleware"], i.factory = function(t) {
              return function() {
                var e = Array.prototype.slice.call(arguments);
                return e.unshift(t), i.push(e), i
              }
            };
            for (var e = 0; e < i.methods.length; e++) {
              var t = i.methods[e];
              i[t] = i.factory(t)
            }
            i.load = function(e, t) {
              var n = document.createElement("script");
              n.type = "text/javascript", n.async = !0, n.src = "https://cdn.segment.com/analytics.js/v1/" + e + "/analytics.min.js";
              var a = document.getElementsByTagName("script")[0];
              a.parentNode.insertBefore(n, a), i._loadOptions = t
            }, i._writeKey = "nibq354xak", i.SNIPPET_VERSION = "4.13.2"
          }
      }()
    </script>
    <script>
      ! function(t, e) {
        if (window.UnionConsentManagement) {
          window.UnionConsentManagement.onSegmentMappingJsLoad = function(n) {
            n(t, e)
          };
          var n = document.createElement("script");
          n.src = "../../../union.theknot.com/dist/v2/tk-analytics/latest/consented-segment.js", n.type = "text/javascript", n.async = !0, document.head.appendChild(n)
        } else analytics.load(t, e)
      }("nibq354xak", {})
    </script>
    <meta name="viewport" content="width=device-width" />
    <meta charSet="utf-8" />
    <title>Rommy Darmawan and Theresa Aldeva&#x27;s Wedding Website - The Knot</title>
    <meta name="description" content="Welcome to Rommy Darmawan and Theresa Aldeva&#x27;s Wedding Website! View photos, directions, registry details and more at The Knot." />
    <link rel="canonical" href="../rommy-darmawan-and-theresa-aldeva-oct-2021.html" />
    <meta name="googlebot" content="noindex,nofollow" />
    <meta name="robots" content="noindex,nofollow" />
    <meta property="og:url" content="https://www.theknot.com/us/rommy-darmawan-and-theresa-aldeva-oct-2021" />
    <meta property="og:title" content="Rommy Darmawan and Theresa Aldeva&#x27;s Wedding Website - The Knot" />
    <meta property="og:description" content="Welcome to Rommy Darmawan and Theresa Aldeva&#x27;s Wedding Website! View photos, directions, registry details and more at The Knot." />
    <meta property="og:image" content="//media.xogrp.com/images/1dc34119-81ef-45bc-98f6-8f992e06d256~rt_0-cr_0.363.1065.896?compress=true" />
    <meta property="og:type" content="website" />
    <link rel="icon" type="image/x-icon" href="https://static.theknot.com/wws-guest-view/_next/static/favicon.ico" />
    <meta name="next-head-count" content="13" />
    <link rel="preload" href="https://static.theknot.com/wws-guest-view/_next/static/pages/_app.f3a493ad7cd1be131c9c.css" as="style" />
    <link rel="stylesheet" href="https://static.theknot.com/wws-guest-view/_next/static/pages/_app.f3a493ad7cd1be131c9c.css" data-n-g="" />
    <noscript data-n-css=""></noscript>
    <link rel="preload" href="https://static.theknot.com/wws-guest-view/_next/static/chunks/main-6cf424dc656e4cce3a97.js" as="script" />
    <link rel="preload" href="https://static.theknot.com/wws-guest-view/_next/static/chunks/webpack-7675728062cc2e40daca.js" as="script" />
    <link rel="preload" href="https://static.theknot.com/wws-guest-view/_next/static/chunks/framework.92982bd08c20a57f256c.js" as="script" />
    <link rel="preload" href="https://static.theknot.com/wws-guest-view/_next/static/chunks/commons.e8825c204e22661c36e1.js" as="script" />
    <link rel="preload" href="https://static.theknot.com/wws-guest-view/_next/static/chunks/b5d9182fe27958a87aeb8cde66a6d0f7ed6e8bb0.936904b2efc1abf4dee0.js" as="script" />
    <link rel="preload" href="https://static.theknot.com/wws-guest-view/_next/static/chunks/1a315c15a13fed08c83a7623d996d48e437839c8.321367ab509b096f25e6.js" as="script" />
    <link rel="preload" href="https://static.theknot.com/wws-guest-view/_next/static/chunks/pages/_app-51e404d2a46892f63a7e.js" as="script" />
    <link rel="preload" href="https://static.theknot.com/wws-guest-view/_next/static/chunks/29107295.9bfd529e3423c89519ae.js" as="script" />
    <link rel="preload" href="https://static.theknot.com/wws-guest-view/_next/static/chunks/8e131c8851dfc0e2121930b9e0443eadd3e2b49a.e718cd79d05d1d5c58fb.js" as="script" />
    <link rel="preload" href="https://static.theknot.com/wws-guest-view/_next/static/chunks/pages/%5BpathPrefix%5D/%5Bslug%5D/%5B%5B...route%5D%5D-1fa7068d86ec8cd2113c.js" as="script" />
  </head>
  <body>
    <div id="__next">
      <div class="css-1oteowz">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Parisienne:wght@400&amp;family=Cormorant:wght@400&amp;display=swap" media="all" />
        <style data-emotion-css="98dg2o">
          .css-98dg2o {
            background-color: #405262;
            background-position: top center;
            background-repeat: no-repeat;
            background-size: cover;
            bottom: 0;
            left: 0;
            position: fixed;
            right: 0;
            z-index: -1;
            top: 56px;
            bottom: -120px;
          }

          @media (min-width:768px) {
            .css-98dg2o {
              top: 0;
            }
          }
        </style>
        <div class="css-98dg2o"></div>
        <style data-emotion-css="1r8zw60">
          .css-1r8zw60 {
            position: relative;
            min-height: 100vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
          }
        </style>
        <div class="css-1r8zw60">
          <style data-emotion-css="xdcd7r">
            .css-xdcd7r {
              height: 56px;
              width: 100%;
            }

            @media (min-width:768px) {
              .css-xdcd7r {
                display: none;
              }
            }
          </style>
          <div class="css-xdcd7r"></div>
          <style data-emotion-css="1djtsgn">
            @media (min-width:768px) {
              .css-1djtsgn {
                display: none;
              }
            }
          </style>
          <style data-emotion-css="1afrw90">
            .css-1afrw90 {
              -webkit-align-items: center;
              -webkit-box-align: center;
              -ms-flex-align: center;
              align-items: center;
              border: 12px solid #405262;
              display: -webkit-box;
              display: -webkit-flex;
              display: -ms-flexbox;
              display: flex;
              -webkit-flex-direction: column;
              -ms-flex-direction: column;
              flex-direction: column;
              -webkit-box-pack: center;
              -webkit-justify-content: center;
              -ms-flex-pack: center;
              justify-content: center;
              padding: 32px 20px;
              width: 100%;
              z-index: 1;
              background-color: #DFD5C0;
            }

            @media (max-width:768px) {
              .css-1afrw90 {
                border: 10px solid #405262;
                border-left: none;
                border-right: none;
                padding: 26px 20px;
              }
            }

            @media (min-width:768px) {
              .css-1afrw90 {
                display: none;
              }
            }
          </style>
          <div class="css-1afrw90">
            <style data-emotion-css="q9306j">
              .css-q9306j {
                margin: 0 auto;
                max-width: 700px;
                text-align: center;
                font-family: Cormorant;
                -webkit-letter-spacing: 0px;
                -moz-letter-spacing: 0px;
                -ms-letter-spacing: 0px;
                letter-spacing: 0px;
                color: #DFD5C0;
                font-size: 16px;
                font-weight: 400;
                color: #405262;
              }
            </style>
            <p class="css-q9306j">Please make sure you&#x27;re in good health to attend. If you feel unwell, just stay at home. All guests attending are required to wear mask. Thankyou for your understanding and we wish you all good health. We really appreciate your support and blessings.</p>
          </div>
          <style data-emotion-css="ijz497">
            .css-ijz497 {
              max-width: 100%;
              max-height: 120px;
              margin-bottom: 20px;
              width: 100%;
              min-width: 380px;
              max-width: 2560px;
              -webkit-align-self: flex-start;
              -ms-flex-item-align: start;
              align-self: flex-start;
            }

            @media (min-width:768px) {
              .css-ijz497 {
                display: none;
              }
            }
          </style>
          <picture class="css-ijz497">
            <source media="(min-resolution: 192dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1280px)" srcSet="https://media-api.xogrp.com/images/39a0bd4c-195f-4204-8d95-9b52c95090bf~rt_auto-rs_2560.h?ordering=explicit" />
            <source media="(min-resolution: 192dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1024px)" srcSet="https://media-api.xogrp.com/images/39a0bd4c-195f-4204-8d95-9b52c95090bf~rt_auto-rs_2048.h?ordering=explicit" />
            <source media="(min-resolution: 192dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 768px)" srcSet="https://media-api.xogrp.com/images/39a0bd4c-195f-4204-8d95-9b52c95090bf~rt_auto-rs_1536.h?ordering=explicit" />
            <source media="(min-resolution: 192dpi), (-webkit-min-device-pixel-ratio: 2)" srcSet="https://media-api.xogrp.com/images/f608335b-113e-4e59-a162-5b736157b5b2~rt_auto-rs_1200.h?ordering=explicit" />
            <source media="(min-resolution: 144dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1280px)" srcSet="https://media-api.xogrp.com/images/39a0bd4c-195f-4204-8d95-9b52c95090bf~rt_auto-rs_1920.h?ordering=explicit" />
            <source media="(min-resolution: 144dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1024px)" srcSet="https://media-api.xogrp.com/images/39a0bd4c-195f-4204-8d95-9b52c95090bf~rt_auto-rs_1536.h?ordering=explicit" />
            <source media="(min-resolution: 144dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 768px)" srcSet="https://media-api.xogrp.com/images/39a0bd4c-195f-4204-8d95-9b52c95090bf~rt_auto-rs_1152.h?ordering=explicit" />
            <source media="(min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 1.5)" srcSet="https://media-api.xogrp.com/images/f608335b-113e-4e59-a162-5b736157b5b2~rt_auto-rs_900.h?ordering=explicit" />
            <source media="(min-width: 1280px)" srcSet="https://media-api.xogrp.com/images/39a0bd4c-195f-4204-8d95-9b52c95090bf~rt_auto-rs_1280.h?ordering=explicit" />
            <source media="(min-width: 1024px)" srcSet="https://media-api.xogrp.com/images/39a0bd4c-195f-4204-8d95-9b52c95090bf~rt_auto-rs_1024.h?ordering=explicit" />
            <source media="(min-width: 768px)" srcSet="https://media-api.xogrp.com/images/39a0bd4c-195f-4204-8d95-9b52c95090bf~rt_auto-rs_768.h?ordering=explicit" />
            <source srcSet="https://media-api.xogrp.com/images/f608335b-113e-4e59-a162-5b736157b5b2~rt_auto-rs_600.h?ordering=explicit" />
            <style data-emotion-css="1ago99h">
              .css-1ago99h {
                width: 100%;
              }
            </style>
            <img loading="eager" alt="" src="https://media-api.xogrp.com/images/39a0bd4c-195f-4204-8d95-9b52c95090bf~rt_auto-rs_768.h?ordering=explicit" class="css-1ago99h" />
          </picture>
          <style data-emotion-css="1u9renw">
            .css-1u9renw {
              padding: 0 4% 10px 4%;
              text-align: center;
              z-index: 1;
            }

            @media (min-width:768px) {
              .css-1u9renw {
                display: none;
              }
            }
          </style>
          <header class="css-1u9renw">
            <style data-emotion-css="hmcepx">
              .css-hmcepx {
                line-height: 1;
                font-family: Parisienne;
                color: #DFD5C0;
                font-size: 60px;
                font-weight: normal;
                margin: 16px 0;
                padding-top: 100px;
                padding-bottom: 20px;
              }

              @media (max-width:640px) {
                .css-hmcepx {
                  font-size: calc(60px * 0.75);
                }
              }

              @media(max-width:1200px) {
                .css-hmcepx {
                  padding-top: 90px;
                }
              }

              @media(max-width:500px) {
                .css-hmcepx {
                  padding-top: 45px;
                }
              }

              @media(min-width:1920px) {
                .css-hmcepx {
                  padding-top: 180px;
                }
              }
            </style>
            <h1 data-testid="header-couple-names" class="css-hmcepx">Rommy &amp; Theresa</h1>
            <style data-emotion-css="281vtp">
              .css-281vtp {
                line-height: 1;
                font-family: Cormorant;
                -webkit-letter-spacing: 3px;
                -moz-letter-spacing: 3px;
                -ms-letter-spacing: 3px;
                letter-spacing: 3px;
                color: #DFD5C0;
                font-size: 20px;
                font-weight: normal;
                font-style: italic;
                margin: 8px 0;
              }

              @media (max-width:640px) {
                .css-281vtp {
                  font-size: calc(20px * 0.75);
                }
              }
            </style>
            <div data-testid="header-wedding-date-location" class="css-281vtp">Tuesday, October 19, 2021</div>
            <div data-testid="header-countdown" class="css-281vtp">20 Days To Go!</div>
          </header>
          <style data-emotion-css="1jgbffo">
            .css-1jgbffo {
              display: none;
            }

            @media (min-width:768px) {
              .css-1jgbffo {
                display: block;
              }
            }
          </style>
          <style data-emotion-css="1mwsfpw">
            .css-1mwsfpw {
              -webkit-align-items: center;
              -webkit-box-align: center;
              -ms-flex-align: center;
              align-items: center;
              border: 12px solid #405262;
              display: -webkit-box;
              display: -webkit-flex;
              display: -ms-flexbox;
              display: flex;
              -webkit-flex-direction: column;
              -ms-flex-direction: column;
              flex-direction: column;
              -webkit-box-pack: center;
              -webkit-justify-content: center;
              -ms-flex-pack: center;
              justify-content: center;
              padding: 32px 20px;
              width: 100%;
              z-index: 1;
              background-color: #DFD5C0;
              display: none;
            }

            @media (max-width:768px) {
              .css-1mwsfpw {
                border: 10px solid #405262;
                border-left: none;
                border-right: none;
                padding: 26px 20px;
              }
            }

            @media (min-width:768px) {
              .css-1mwsfpw {
                display: block;
              }
            }
          </style>
          <div class="css-1mwsfpw">
            <p class="css-q9306j">Please make sure you&#x27;re in good health to attend. If you feel unwell, just stay at home. All guests attending are required to wear mask. Thankyou for your understanding and we wish you all good health. We really appreciate your support and blessings.</p>
          </div>
          <style data-emotion-css="2yc937">
            .css-2yc937 {
              max-width: 100%;
              max-height: 120px;
              margin-bottom: 20px;
              width: 100%;
              min-width: 380px;
              max-width: 2560px;
              -webkit-align-self: flex-start;
              -ms-flex-item-align: start;
              align-self: flex-start;
              display: none;
            }

            @media (min-width:768px) {
              .css-2yc937 {
                display: block;
              }
            }
          </style>
          <picture class="css-2yc937">
            <source media="(min-resolution: 192dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1280px)" srcSet="https://media-api.xogrp.com/images/39a0bd4c-195f-4204-8d95-9b52c95090bf~rt_auto-rs_3000.h?ordering=explicit" />
            <source media="(min-resolution: 192dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1024px)" srcSet="https://media-api.xogrp.com/images/39a0bd4c-195f-4204-8d95-9b52c95090bf~rt_auto-rs_2560.h?ordering=explicit" />
            <source media="(min-resolution: 192dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 768px)" srcSet="https://media-api.xogrp.com/images/39a0bd4c-195f-4204-8d95-9b52c95090bf~rt_auto-rs_2048.h?ordering=explicit" />
            <source media="(min-resolution: 192dpi), (-webkit-min-device-pixel-ratio: 2)" srcSet="https://media-api.xogrp.com/images/f608335b-113e-4e59-a162-5b736157b5b2~rt_auto-rs_1536.h?ordering=explicit" />
            <source media="(min-resolution: 144dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1280px)" srcSet="https://media-api.xogrp.com/images/39a0bd4c-195f-4204-8d95-9b52c95090bf~rt_auto-rs_2250.h?ordering=explicit" />
            <source media="(min-resolution: 144dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1024px)" srcSet="https://media-api.xogrp.com/images/39a0bd4c-195f-4204-8d95-9b52c95090bf~rt_auto-rs_1920.h?ordering=explicit" />
            <source media="(min-resolution: 144dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 768px)" srcSet="https://media-api.xogrp.com/images/39a0bd4c-195f-4204-8d95-9b52c95090bf~rt_auto-rs_1536.h?ordering=explicit" />
            <source media="(min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 1.5)" srcSet="https://media-api.xogrp.com/images/f608335b-113e-4e59-a162-5b736157b5b2~rt_auto-rs_1152.h?ordering=explicit" />
            <source media="(min-width: 1280px)" srcSet="https://media-api.xogrp.com/images/39a0bd4c-195f-4204-8d95-9b52c95090bf~rt_auto-rs_1500.h?ordering=explicit" />
            <source media="(min-width: 1024px)" srcSet="https://media-api.xogrp.com/images/39a0bd4c-195f-4204-8d95-9b52c95090bf~rt_auto-rs_1280.h?ordering=explicit" />
            <source media="(min-width: 768px)" srcSet="https://media-api.xogrp.com/images/39a0bd4c-195f-4204-8d95-9b52c95090bf~rt_auto-rs_1024.h?ordering=explicit" />
            <source srcSet="https://media-api.xogrp.com/images/f608335b-113e-4e59-a162-5b736157b5b2~rt_auto-rs_768.h?ordering=explicit" />
            <img loading="eager" alt="" src="https://media-api.xogrp.com/images/39a0bd4c-195f-4204-8d95-9b52c95090bf~rt_auto-rs_1024.h?ordering=explicit" class="css-1ago99h" />
          </picture>
          <style data-emotion-css="nu7vgm">
            .css-nu7vgm {
              padding: 0 4% 10px 4%;
              text-align: center;
              z-index: 1;
              display: none;
            }

            @media (min-width:768px) {
              .css-nu7vgm {
                display: block;
              }
            }
          </style>
          <header class="css-nu7vgm">
            <h1 data-testid="header-couple-names" class="css-hmcepx">Rommy &amp; Theresa</h1>
            <div data-testid="header-wedding-date-location" class="css-281vtp">Tuesday, October 19, 2021</div>
            <div data-testid="header-countdown" class="css-281vtp">20 Days To Go!</div>
          </header>
          <style data-emotion-css="1lsljyj">
            .css-1lsljyj {
              display: block;
              height: 40px;
              left: 8px;
              margin: 0;
              overflow: hidden;
              position: fixed;
              top: 8px;
              width: 40px;
              z-index: 19;
            }

            @media (min-width:768px) {
              .css-1lsljyj {
                display: none;
              }
            }
          </style>
          <div class="css-1lsljyj">
            <style data-emotion-css="1tif6e3">
              .css-1tif6e3 {
                background: none;
                border: none;
                font-size: 10px;
                height: 40px;
                width: 40px;
                border-radius: 3px;
              }
            </style>
            <button class="css-1tif6e3">
              <style data-emotion-css="146nc8v">
                .css-146nc8v:before,
                .css-146nc8v:after {
                  background: #DFD5C0;
                  box-shadow: 0 -10px 0 0 #DFD5C0, 0 10px 0 0 #DFD5C0;
                  content: '';
                  height: 3px;
                  left: 20%;
                  margin: 0 auto;
                  border-radius: 3px;
                  margin-top: -0.15em;
                  position: absolute;
                  top: 50%;
                  -webkit-transition: all 0.4s;
                  transition: all 0.4s;
                  width: 24px;
                }
              </style>
              <span class="css-146nc8v"></span>
              <style data-emotion-css="1wkn33">
                .css-1wkn33 {
                  border: 0;
                  -webkit-clip: rect(0 0 0 0);
                  clip: rect(0 0 0 0);
                  height: 1px;
                  margin: -1px;
                  overflow: hidden;
                  padding: 0;
                  position: absolute;
                  width: 1px;
                }
              </style>
              <span class="css-1wkn33">Menu Button</span>
            </button>
          </div>
          <style data-emotion-css="29cgmv">
            .css-29cgmv {
              background-color: #405262;
              height: 56px;
              left: 0;
              position: fixed;
              top: 0;
              width: 100%;
              z-index: 18;
            }

            @media (min-width:768px) {
              .css-29cgmv {
                display: none;
              }
            }
          </style>
          <div class="css-29cgmv">
            <style data-emotion-css="1qvialw">
              .css-1qvialw {
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                height: 56px;
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center;
                width: 100%;
                font-family: Parisienne;
                color: #DFD5C0;
                font-size: 32px;
                font-weight: normal;
              }

              @media (max-width:640px) {
                .css-1qvialw {
                  font-size: calc(32px * 0.75);
                }
              }
            </style>
            <h2 class="css-1qvialw">Photos</h2>
          </div>
          <style data-emotion-css="1c5dsy6">
            .css-1c5dsy6 {
              height: 0;
              background-color: #405262;
              left: 0;
              overflow: hidden;
              position: fixed;
              top: 0;
              -webkit-transition: all 0.5s;
              transition: all 0.5s;
              width: 100%;
              z-index: 18;
            }

            @media (min-width:768px) {
              .css-1c5dsy6 {
                display: none;
              }
            }
          </style>
          <nav role="navigation" class="css-1c5dsy6">
            <style data-emotion-css="nfosgx">
              .css-nfosgx {
                padding-top: 56px;
                height: 100vh;
                overflow-y: auto;
              }
            </style>
            <div class="css-nfosgx">
              <style data-emotion-css="xevap0">
                .css-xevap0 {
                  display: -webkit-box;
                  display: -webkit-flex;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-flex-direction: column;
                  -ms-flex-direction: column;
                  flex-direction: column;
                  -webkit-align-items: center;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center;
                  list-style: none;
                  margin: 0;
                  padding: 0;
                }
              </style>
              <ul class="css-xevap0">
                <style data-emotion-css="6vuxaj">
                  .css-6vuxaj {
                    text-align: center;
                    width: 100%;
                    padding: 8px;
                  }

                  .css-6vuxaj:hover {
                    background-color: rgba(223, 213, 192, 10%);
                  }
                </style>
                <li class="css-6vuxaj">
                  <style data-emotion-css="12he7qw">
                    .css-12he7qw {
                      display: block;
                      padding: 0;
                      margin: 0;
                    }
                  </style>
                  <a class="css-12he7qw" href="https://www.theknot.com/us/rommy-darmawan-and-theresa-aldeva-oct-2021">
                    <style data-emotion-css="a2heee">
                      .css-a2heee {
                        font-family: Cormorant;
                        -webkit-letter-spacing: 0px;
                        -moz-letter-spacing: 0px;
                        -ms-letter-spacing: 0px;
                        letter-spacing: 0px;
                        color: #DFD5C0;
                        font-size: 16px;
                        font-weight: 400;
                        border-bottom: 2px solid transparent;
                        display: block;
                        -webkit-letter-spacing: 2px;
                        -moz-letter-spacing: 2px;
                        -ms-letter-spacing: 2px;
                        letter-spacing: 2px;
                        line-height: 1;
                        margin: 0 auto;
                        padding: 8px 8px 6px;
                        -webkit-text-decoration: none;
                        text-decoration: none;
                        -webkit-transition: all 0.25s;
                        transition: all 0.25s;
                        width: -webkit-fit-content;
                        width: -moz-fit-content;
                        width: fit-content;
                      }

                      @media (max-width:640px) {
                        .css-a2heee {
                          font-size: calc(16px * 0.875);
                        }
                      }
                    </style>
                    <span class="css-a2heee">Home</span>
                  </a>
                </li>
                <li class="css-6vuxaj">
                  <a rel="nofollow" class="css-12he7qw" href="https://www.theknot.com/us/rommy-darmawan-and-theresa-aldeva-oct-2021/photos">
                    <style data-emotion-css="gc7fs7">
                      .css-gc7fs7 {
                        font-family: Cormorant;
                        -webkit-letter-spacing: 0px;
                        -moz-letter-spacing: 0px;
                        -ms-letter-spacing: 0px;
                        letter-spacing: 0px;
                        color: #DFD5C0;
                        font-size: 16px;
                        font-weight: 400;
                        border-bottom: 2px solid transparent;
                        display: block;
                        -webkit-letter-spacing: 2px;
                        -moz-letter-spacing: 2px;
                        -ms-letter-spacing: 2px;
                        letter-spacing: 2px;
                        line-height: 1;
                        margin: 0 auto;
                        padding: 8px 8px 6px;
                        -webkit-text-decoration: none;
                        text-decoration: none;
                        -webkit-transition: all 0.25s;
                        transition: all 0.25s;
                        width: -webkit-fit-content;
                        width: -moz-fit-content;
                        width: fit-content;
                        border-bottom: 2px solid #DFD5C0;
                      }

                      @media (max-width:640px) {
                        .css-gc7fs7 {
                          font-size: calc(16px * 0.875);
                        }
                      }
                    </style>
                    <span class="css-gc7fs7">Photos</span>
                  </a>
                </li>
                <li class="css-6vuxaj">
                  <a class="css-12he7qw" href="https://www.theknot.com/us/rommy-darmawan-and-theresa-aldeva-oct-2021/registry">
                    <span class="css-a2heee">Registry</span>
                  </a>
                </li>
                <li class="css-6vuxaj">
                  <a rel="nofollow" class="css-12he7qw" href="https://www.theknot.com/us/rommy-darmawan-and-theresa-aldeva-oct-2021/rsvp">
                    <span class="css-a2heee">RSVP</span>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
          <style data-emotion-css="300rx2">
            .css-300rx2 {
              display: none;
              margin-top: 25px;
            }

            @media (min-width:768px) {
              .css-300rx2 {
                display: block;
              }
            }
          </style>
          <nav class="css-300rx2">
            <style data-emotion-css="1bpqnod">
              .css-1bpqnod {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-flex-wrap: wrap;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center;
                margin: 0;
                padding: 8px 16px;
              }
            </style>
            <div class="css-1bpqnod">
              <style data-emotion-css="16kcklx">
                .css-16kcklx {
                  display: -webkit-box;
                  display: -webkit-flex;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-flex-wrap: wrap;
                  -ms-flex-wrap: wrap;
                  flex-wrap: wrap;
                  -webkit-box-pack: center;
                  -webkit-justify-content: center;
                  -ms-flex-pack: center;
                  justify-content: center;
                }
              </style>
              <ul data-testid="desktop-nav-row-1" class="css-16kcklx">
                <style data-emotion-css="haue6f">
                  .css-haue6f {
                    display: inline-block;
                    list-style: none;
                    padding: 0 8px;
                  }
                </style>
                <li class="css-haue6f">
                  <style data-emotion-css="tv0uwv">
                    .css-tv0uwv {
                      margin: 0;
                      padding: 8px 0;
                    }
                  </style>
                  <style data-emotion-css="mg6isj">
                    .css-mg6isj {
                      display: block;
                      padding: 0;
                      margin: 0;
                      margin: 0;
                      padding: 8px 0;
                    }
                  </style>
                  <a class="css-mg6isj" href="https://www.theknot.com/us/rommy-darmawan-and-theresa-aldeva-oct-2021">
                    <style data-emotion-css="1rhwp96">
                      .css-1rhwp96 {
                        font-family: Cormorant;
                        -webkit-letter-spacing: 0px;
                        -moz-letter-spacing: 0px;
                        -ms-letter-spacing: 0px;
                        letter-spacing: 0px;
                        color: #DFD5C0;
                        font-size: 16px;
                        font-weight: 400;
                        border-bottom: 2px solid transparent;
                        display: block;
                        -webkit-letter-spacing: 2px;
                        -moz-letter-spacing: 2px;
                        -ms-letter-spacing: 2px;
                        letter-spacing: 2px;
                        line-height: 1;
                        margin: 0 auto;
                        padding: 8px 8px 6px;
                        -webkit-text-decoration: none;
                        text-decoration: none;
                        -webkit-transition: all 0.25s;
                        transition: all 0.25s;
                        width: -webkit-fit-content;
                        width: -moz-fit-content;
                        width: fit-content;
                      }

                      @media (max-width:640px) {
                        .css-1rhwp96 {
                          font-size: calc(16px * 0.875);
                        }
                      }

                      .css-1rhwp96:hover {
                        color: #DFD5C0;
                        border-bottom: 2px solid rgba(223, 213, 192, 70%);
                      }
                    </style>
                    <span class="css-1rhwp96">Home</span>
                  </a>
                </li>
                <li class="css-haue6f">
                  <a rel="nofollow" class="css-mg6isj" href="https://www.theknot.com/us/rommy-darmawan-and-theresa-aldeva-oct-2021/photos">
                    <span class="css-gc7fs7">Photos</span>
                  </a>
                </li>
              </ul>
              <ul data-testid="desktop-nav-row-2" class="css-16kcklx">
                <li class="css-haue6f">
                  <a class="css-mg6isj" href="https://www.theknot.com/us/rommy-darmawan-and-theresa-aldeva-oct-2021/registry">
                    <span class="css-1rhwp96">Registry</span>
                  </a>
                </li>
                <li class="css-haue6f">
                  <a rel="nofollow" class="css-mg6isj" href="https://www.theknot.com/us/rommy-darmawan-and-theresa-aldeva-oct-2021/rsvp">
                    <span class="css-1rhwp96">RSVP</span>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
          <style data-emotion-css="iex2id">
            .css-iex2id {
              padding: 16px 0;
              width: 100%;
            }
          </style>
          <div class="css-iex2id">
            <style data-emotion-css="10jrxlj">
              .css-10jrxlj {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                margin: 24px auto 80px auto;
                width: 320px;
                -webkit-flex-wrap: wrap;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
              }

              @media (min-width:670px) {
                .css-10jrxlj {
                  width: 635px;
                }
              }

              @media (min-width:995px) {
                .css-10jrxlj {
                  width: 960px;
                }
              }
            </style>
            <div class="PhotoGalleryItem css-10jrxlj" data-testid="photo-gallery-item-25394402">
              <picture>
                <source media="(min-resolution: 192dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/95ed42b3-ee9b-4344-a78a-47e1d8b880e3~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/95ed42b3-ee9b-4344-a78a-47e1d8b880e3~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/95ed42b3-ee9b-4344-a78a-47e1d8b880e3~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi), (-webkit-min-device-pixel-ratio: 2)" data-srcset="https://media-api.xogrp.com/images/95ed42b3-ee9b-4344-a78a-47e1d8b880e3~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/95ed42b3-ee9b-4344-a78a-47e1d8b880e3~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/95ed42b3-ee9b-4344-a78a-47e1d8b880e3~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/95ed42b3-ee9b-4344-a78a-47e1d8b880e3~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 1.5)" data-srcset="https://media-api.xogrp.com/images/95ed42b3-ee9b-4344-a78a-47e1d8b880e3~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/95ed42b3-ee9b-4344-a78a-47e1d8b880e3~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/95ed42b3-ee9b-4344-a78a-47e1d8b880e3~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/95ed42b3-ee9b-4344-a78a-47e1d8b880e3~rt_auto-sc_600.600?ordering=explicit" />
                <source data-srcset="https://media-api.xogrp.com/images/95ed42b3-ee9b-4344-a78a-47e1d8b880e3~rt_auto-sc_600.600?ordering=explicit" />
                <style data-emotion-css="mfbvyi">
                  .css-mfbvyi {
                    background-color: rgb(216, 216, 216);
                    border: 1px solid rgb(151, 151, 151);
                    cursor: pointer;
                    height: 295px;
                    margin: 10px;
                    width: 295px;
                    object-fit: contain;
                  }
                </style>
                <img loading="lazy" alt="Gallery Photo 1" data-src="https://media-api.xogrp.com/images/95ed42b3-ee9b-4344-a78a-47e1d8b880e3~rt_auto-rs_600.h?ordering=explicit" src="https://media-api.xogrp.com/images/95ed42b3-ee9b-4344-a78a-47e1d8b880e3~rt_auto-sc_600.600?ordering=explicit" class="css-mfbvyi" />
              </picture>
              <style data-emotion-css="1eriwxk">
                .css-1eriwxk {
                  background: #405262;
                  border-radius: 0;
                  border: none;
                  bottom: unset;
                  display: -webkit-box;
                  display: -webkit-flex;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-flex-direction: column;
                  -ms-flex-direction: column;
                  flex-direction: column;
                  left: 50%;
                  max-height: 100vh;
                  outline: none;
                  padding: 0;
                  position: fixed;
                  right: unset;
                  top: 50%;
                  -webkit-transform: translate(-50%, -50%);
                  -ms-transform: translate(-50%, -50%);
                  transform: translate(-50%, -50%);
                  width: -webkit-min-content;
                  width: -moz-min-content;
                  width: min-content;
                }

                @media (min-width:768px) {
                  .css-1eriwxk svg {
                    opacity: 0;
                    -webkit-transition: opacity 0.25s ease-in-out;
                    transition: opacity 0.25s ease-in-out;
                  }

                  .css-1eriwxk:hover svg {
                    opacity: 1;
                  }
                }
              </style>
              <picture>
                <source media="(min-resolution: 192dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/66e3fc32-6add-4b6d-9cf3-d2629fbd217b~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/66e3fc32-6add-4b6d-9cf3-d2629fbd217b~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/66e3fc32-6add-4b6d-9cf3-d2629fbd217b~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi), (-webkit-min-device-pixel-ratio: 2)" data-srcset="https://media-api.xogrp.com/images/66e3fc32-6add-4b6d-9cf3-d2629fbd217b~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/66e3fc32-6add-4b6d-9cf3-d2629fbd217b~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/66e3fc32-6add-4b6d-9cf3-d2629fbd217b~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/66e3fc32-6add-4b6d-9cf3-d2629fbd217b~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 1.5)" data-srcset="https://media-api.xogrp.com/images/66e3fc32-6add-4b6d-9cf3-d2629fbd217b~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/66e3fc32-6add-4b6d-9cf3-d2629fbd217b~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/66e3fc32-6add-4b6d-9cf3-d2629fbd217b~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/66e3fc32-6add-4b6d-9cf3-d2629fbd217b~rt_auto-sc_600.600?ordering=explicit" />
                <source data-srcset="https://media-api.xogrp.com/images/66e3fc32-6add-4b6d-9cf3-d2629fbd217b~rt_auto-sc_600.600?ordering=explicit" />
                <img loading="lazy" alt="Gallery Photo 2" data-src="https://media-api.xogrp.com/images/66e3fc32-6add-4b6d-9cf3-d2629fbd217b~rt_auto-rs_600.h?ordering=explicit" src="https://media-api.xogrp.com/images/66e3fc32-6add-4b6d-9cf3-d2629fbd217b~rt_auto-sc_600.600?ordering=explicit" class="css-mfbvyi" />
              </picture>
              <picture>
                <source media="(min-resolution: 192dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/0cdd94c9-6367-4eaf-b5d2-b6068ddabc8a~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/0cdd94c9-6367-4eaf-b5d2-b6068ddabc8a~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/0cdd94c9-6367-4eaf-b5d2-b6068ddabc8a~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi), (-webkit-min-device-pixel-ratio: 2)" data-srcset="https://media-api.xogrp.com/images/0cdd94c9-6367-4eaf-b5d2-b6068ddabc8a~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/0cdd94c9-6367-4eaf-b5d2-b6068ddabc8a~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/0cdd94c9-6367-4eaf-b5d2-b6068ddabc8a~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/0cdd94c9-6367-4eaf-b5d2-b6068ddabc8a~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 1.5)" data-srcset="https://media-api.xogrp.com/images/0cdd94c9-6367-4eaf-b5d2-b6068ddabc8a~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/0cdd94c9-6367-4eaf-b5d2-b6068ddabc8a~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/0cdd94c9-6367-4eaf-b5d2-b6068ddabc8a~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/0cdd94c9-6367-4eaf-b5d2-b6068ddabc8a~rt_auto-sc_600.600?ordering=explicit" />
                <source data-srcset="https://media-api.xogrp.com/images/0cdd94c9-6367-4eaf-b5d2-b6068ddabc8a~rt_auto-sc_600.600?ordering=explicit" />
                <img loading="lazy" alt="Gallery Photo 3" data-src="https://media-api.xogrp.com/images/0cdd94c9-6367-4eaf-b5d2-b6068ddabc8a~rt_auto-rs_600.h?ordering=explicit" src="https://media-api.xogrp.com/images/0cdd94c9-6367-4eaf-b5d2-b6068ddabc8a~rt_auto-sc_600.600?ordering=explicit" class="css-mfbvyi" />
              </picture>
              <picture>
                <source media="(min-resolution: 192dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/951cdb00-3d9f-48d1-a4b0-e71c0d88f70f~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/951cdb00-3d9f-48d1-a4b0-e71c0d88f70f~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/951cdb00-3d9f-48d1-a4b0-e71c0d88f70f~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi), (-webkit-min-device-pixel-ratio: 2)" data-srcset="https://media-api.xogrp.com/images/951cdb00-3d9f-48d1-a4b0-e71c0d88f70f~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/951cdb00-3d9f-48d1-a4b0-e71c0d88f70f~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/951cdb00-3d9f-48d1-a4b0-e71c0d88f70f~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/951cdb00-3d9f-48d1-a4b0-e71c0d88f70f~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 1.5)" data-srcset="https://media-api.xogrp.com/images/951cdb00-3d9f-48d1-a4b0-e71c0d88f70f~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/951cdb00-3d9f-48d1-a4b0-e71c0d88f70f~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/951cdb00-3d9f-48d1-a4b0-e71c0d88f70f~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/951cdb00-3d9f-48d1-a4b0-e71c0d88f70f~rt_auto-sc_600.600?ordering=explicit" />
                <source data-srcset="https://media-api.xogrp.com/images/951cdb00-3d9f-48d1-a4b0-e71c0d88f70f~rt_auto-sc_600.600?ordering=explicit" />
                <img loading="lazy" alt="Gallery Photo 4" data-src="https://media-api.xogrp.com/images/951cdb00-3d9f-48d1-a4b0-e71c0d88f70f~rt_auto-rs_600.h?ordering=explicit" src="https://media-api.xogrp.com/images/951cdb00-3d9f-48d1-a4b0-e71c0d88f70f~rt_auto-sc_600.600?ordering=explicit" class="css-mfbvyi" />
              </picture>
              <picture>
                <source media="(min-resolution: 192dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/e0ad5113-7d4c-4276-af5c-7a21f082d1ac~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/e0ad5113-7d4c-4276-af5c-7a21f082d1ac~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/e0ad5113-7d4c-4276-af5c-7a21f082d1ac~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi), (-webkit-min-device-pixel-ratio: 2)" data-srcset="https://media-api.xogrp.com/images/e0ad5113-7d4c-4276-af5c-7a21f082d1ac~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/e0ad5113-7d4c-4276-af5c-7a21f082d1ac~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/e0ad5113-7d4c-4276-af5c-7a21f082d1ac~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/e0ad5113-7d4c-4276-af5c-7a21f082d1ac~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 1.5)" data-srcset="https://media-api.xogrp.com/images/e0ad5113-7d4c-4276-af5c-7a21f082d1ac~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/e0ad5113-7d4c-4276-af5c-7a21f082d1ac~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/e0ad5113-7d4c-4276-af5c-7a21f082d1ac~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/e0ad5113-7d4c-4276-af5c-7a21f082d1ac~rt_auto-sc_600.600?ordering=explicit" />
                <source data-srcset="https://media-api.xogrp.com/images/e0ad5113-7d4c-4276-af5c-7a21f082d1ac~rt_auto-sc_600.600?ordering=explicit" />
                <img loading="lazy" alt="Gallery Photo 5" data-src="https://media-api.xogrp.com/images/e0ad5113-7d4c-4276-af5c-7a21f082d1ac~rt_auto-rs_600.h?ordering=explicit" src="https://media-api.xogrp.com/images/e0ad5113-7d4c-4276-af5c-7a21f082d1ac~rt_auto-sc_600.600?ordering=explicit" class="css-mfbvyi" />
              </picture>
              <picture>
                <source media="(min-resolution: 192dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/877f6f48-dc17-48dc-81b1-f78639025846~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/877f6f48-dc17-48dc-81b1-f78639025846~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/877f6f48-dc17-48dc-81b1-f78639025846~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi), (-webkit-min-device-pixel-ratio: 2)" data-srcset="https://media-api.xogrp.com/images/877f6f48-dc17-48dc-81b1-f78639025846~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/877f6f48-dc17-48dc-81b1-f78639025846~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/877f6f48-dc17-48dc-81b1-f78639025846~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/877f6f48-dc17-48dc-81b1-f78639025846~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 1.5)" data-srcset="https://media-api.xogrp.com/images/877f6f48-dc17-48dc-81b1-f78639025846~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/877f6f48-dc17-48dc-81b1-f78639025846~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/877f6f48-dc17-48dc-81b1-f78639025846~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/877f6f48-dc17-48dc-81b1-f78639025846~rt_auto-sc_600.600?ordering=explicit" />
                <source data-srcset="https://media-api.xogrp.com/images/877f6f48-dc17-48dc-81b1-f78639025846~rt_auto-sc_600.600?ordering=explicit" />
                <img loading="lazy" alt="Gallery Photo 6" data-src="https://media-api.xogrp.com/images/877f6f48-dc17-48dc-81b1-f78639025846~rt_auto-rs_600.h?ordering=explicit" src="https://media-api.xogrp.com/images/877f6f48-dc17-48dc-81b1-f78639025846~rt_auto-sc_600.600?ordering=explicit" class="css-mfbvyi" />
              </picture>
              <picture>
                <source media="(min-resolution: 192dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/7c5f3f6c-cb29-4fa8-ad7b-54da86724466~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/7c5f3f6c-cb29-4fa8-ad7b-54da86724466~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/7c5f3f6c-cb29-4fa8-ad7b-54da86724466~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi), (-webkit-min-device-pixel-ratio: 2)" data-srcset="https://media-api.xogrp.com/images/7c5f3f6c-cb29-4fa8-ad7b-54da86724466~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/7c5f3f6c-cb29-4fa8-ad7b-54da86724466~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/7c5f3f6c-cb29-4fa8-ad7b-54da86724466~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/7c5f3f6c-cb29-4fa8-ad7b-54da86724466~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 1.5)" data-srcset="https://media-api.xogrp.com/images/7c5f3f6c-cb29-4fa8-ad7b-54da86724466~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/7c5f3f6c-cb29-4fa8-ad7b-54da86724466~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/7c5f3f6c-cb29-4fa8-ad7b-54da86724466~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/7c5f3f6c-cb29-4fa8-ad7b-54da86724466~rt_auto-sc_600.600?ordering=explicit" />
                <source data-srcset="https://media-api.xogrp.com/images/7c5f3f6c-cb29-4fa8-ad7b-54da86724466~rt_auto-sc_600.600?ordering=explicit" />
                <img loading="lazy" alt="Gallery Photo 7" data-src="https://media-api.xogrp.com/images/7c5f3f6c-cb29-4fa8-ad7b-54da86724466~rt_auto-rs_600.h?ordering=explicit" src="https://media-api.xogrp.com/images/7c5f3f6c-cb29-4fa8-ad7b-54da86724466~rt_auto-sc_600.600?ordering=explicit" class="css-mfbvyi" />
              </picture>
              <picture>
                <source media="(min-resolution: 192dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/61a5cad9-6c16-4ffb-9534-c422f7900532~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/61a5cad9-6c16-4ffb-9534-c422f7900532~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/61a5cad9-6c16-4ffb-9534-c422f7900532~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi), (-webkit-min-device-pixel-ratio: 2)" data-srcset="https://media-api.xogrp.com/images/61a5cad9-6c16-4ffb-9534-c422f7900532~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/61a5cad9-6c16-4ffb-9534-c422f7900532~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/61a5cad9-6c16-4ffb-9534-c422f7900532~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/61a5cad9-6c16-4ffb-9534-c422f7900532~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 1.5)" data-srcset="https://media-api.xogrp.com/images/61a5cad9-6c16-4ffb-9534-c422f7900532~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/61a5cad9-6c16-4ffb-9534-c422f7900532~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/61a5cad9-6c16-4ffb-9534-c422f7900532~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/61a5cad9-6c16-4ffb-9534-c422f7900532~rt_auto-sc_600.600?ordering=explicit" />
                <source data-srcset="https://media-api.xogrp.com/images/61a5cad9-6c16-4ffb-9534-c422f7900532~rt_auto-sc_600.600?ordering=explicit" />
                <img loading="lazy" alt="Gallery Photo 8" data-src="https://media-api.xogrp.com/images/61a5cad9-6c16-4ffb-9534-c422f7900532~rt_auto-rs_600.h?ordering=explicit" src="https://media-api.xogrp.com/images/61a5cad9-6c16-4ffb-9534-c422f7900532~rt_auto-sc_600.600?ordering=explicit" class="css-mfbvyi" />
              </picture>
              <picture>
                <source media="(min-resolution: 192dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/66bc043f-80a8-46a0-a0ec-ea891fd36d16~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/66bc043f-80a8-46a0-a0ec-ea891fd36d16~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/66bc043f-80a8-46a0-a0ec-ea891fd36d16~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi), (-webkit-min-device-pixel-ratio: 2)" data-srcset="https://media-api.xogrp.com/images/66bc043f-80a8-46a0-a0ec-ea891fd36d16~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/66bc043f-80a8-46a0-a0ec-ea891fd36d16~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/66bc043f-80a8-46a0-a0ec-ea891fd36d16~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/66bc043f-80a8-46a0-a0ec-ea891fd36d16~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 1.5)" data-srcset="https://media-api.xogrp.com/images/66bc043f-80a8-46a0-a0ec-ea891fd36d16~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/66bc043f-80a8-46a0-a0ec-ea891fd36d16~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/66bc043f-80a8-46a0-a0ec-ea891fd36d16~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/66bc043f-80a8-46a0-a0ec-ea891fd36d16~rt_auto-sc_600.600?ordering=explicit" />
                <source data-srcset="https://media-api.xogrp.com/images/66bc043f-80a8-46a0-a0ec-ea891fd36d16~rt_auto-sc_600.600?ordering=explicit" />
                <img loading="lazy" alt="Gallery Photo 9" data-src="https://media-api.xogrp.com/images/66bc043f-80a8-46a0-a0ec-ea891fd36d16~rt_auto-rs_600.h?ordering=explicit" src="https://media-api.xogrp.com/images/66bc043f-80a8-46a0-a0ec-ea891fd36d16~rt_auto-sc_600.600?ordering=explicit" class="css-mfbvyi" />
              </picture>
              <picture>
                <source media="(min-resolution: 192dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/5170fa87-b058-4997-b88c-cb6e96474d76~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/5170fa87-b058-4997-b88c-cb6e96474d76~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/5170fa87-b058-4997-b88c-cb6e96474d76~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi), (-webkit-min-device-pixel-ratio: 2)" data-srcset="https://media-api.xogrp.com/images/5170fa87-b058-4997-b88c-cb6e96474d76~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/5170fa87-b058-4997-b88c-cb6e96474d76~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/5170fa87-b058-4997-b88c-cb6e96474d76~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/5170fa87-b058-4997-b88c-cb6e96474d76~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 1.5)" data-srcset="https://media-api.xogrp.com/images/5170fa87-b058-4997-b88c-cb6e96474d76~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/5170fa87-b058-4997-b88c-cb6e96474d76~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/5170fa87-b058-4997-b88c-cb6e96474d76~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/5170fa87-b058-4997-b88c-cb6e96474d76~rt_auto-sc_600.600?ordering=explicit" />
                <source data-srcset="https://media-api.xogrp.com/images/5170fa87-b058-4997-b88c-cb6e96474d76~rt_auto-sc_600.600?ordering=explicit" />
                <img loading="lazy" alt="Gallery Photo 10" data-src="https://media-api.xogrp.com/images/5170fa87-b058-4997-b88c-cb6e96474d76~rt_auto-rs_600.h?ordering=explicit" src="https://media-api.xogrp.com/images/5170fa87-b058-4997-b88c-cb6e96474d76~rt_auto-sc_600.600?ordering=explicit" class="css-mfbvyi" />
              </picture>
              <picture>
                <source media="(min-resolution: 192dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/34e178d1-756a-4d3e-8205-519e351cf5f2~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/34e178d1-756a-4d3e-8205-519e351cf5f2~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/34e178d1-756a-4d3e-8205-519e351cf5f2~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi), (-webkit-min-device-pixel-ratio: 2)" data-srcset="https://media-api.xogrp.com/images/34e178d1-756a-4d3e-8205-519e351cf5f2~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/34e178d1-756a-4d3e-8205-519e351cf5f2~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/34e178d1-756a-4d3e-8205-519e351cf5f2~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/34e178d1-756a-4d3e-8205-519e351cf5f2~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 1.5)" data-srcset="https://media-api.xogrp.com/images/34e178d1-756a-4d3e-8205-519e351cf5f2~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/34e178d1-756a-4d3e-8205-519e351cf5f2~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/34e178d1-756a-4d3e-8205-519e351cf5f2~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/34e178d1-756a-4d3e-8205-519e351cf5f2~rt_auto-sc_600.600?ordering=explicit" />
                <source data-srcset="https://media-api.xogrp.com/images/34e178d1-756a-4d3e-8205-519e351cf5f2~rt_auto-sc_600.600?ordering=explicit" />
                <img loading="lazy" alt="Gallery Photo 11" data-src="https://media-api.xogrp.com/images/34e178d1-756a-4d3e-8205-519e351cf5f2~rt_auto-rs_600.h?ordering=explicit" src="https://media-api.xogrp.com/images/34e178d1-756a-4d3e-8205-519e351cf5f2~rt_auto-sc_600.600?ordering=explicit" class="css-mfbvyi" />
              </picture>
              <picture>
                <source media="(min-resolution: 192dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/565d48e1-13f7-4eb9-b1f1-9f461ce18078~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/565d48e1-13f7-4eb9-b1f1-9f461ce18078~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/565d48e1-13f7-4eb9-b1f1-9f461ce18078~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi), (-webkit-min-device-pixel-ratio: 2)" data-srcset="https://media-api.xogrp.com/images/565d48e1-13f7-4eb9-b1f1-9f461ce18078~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/565d48e1-13f7-4eb9-b1f1-9f461ce18078~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/565d48e1-13f7-4eb9-b1f1-9f461ce18078~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/565d48e1-13f7-4eb9-b1f1-9f461ce18078~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 1.5)" data-srcset="https://media-api.xogrp.com/images/565d48e1-13f7-4eb9-b1f1-9f461ce18078~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/565d48e1-13f7-4eb9-b1f1-9f461ce18078~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/565d48e1-13f7-4eb9-b1f1-9f461ce18078~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/565d48e1-13f7-4eb9-b1f1-9f461ce18078~rt_auto-sc_600.600?ordering=explicit" />
                <source data-srcset="https://media-api.xogrp.com/images/565d48e1-13f7-4eb9-b1f1-9f461ce18078~rt_auto-sc_600.600?ordering=explicit" />
                <img loading="lazy" alt="Gallery Photo 12" data-src="https://media-api.xogrp.com/images/565d48e1-13f7-4eb9-b1f1-9f461ce18078~rt_auto-rs_600.h?ordering=explicit" src="https://media-api.xogrp.com/images/565d48e1-13f7-4eb9-b1f1-9f461ce18078~rt_auto-sc_600.600?ordering=explicit" class="css-mfbvyi" />
              </picture>
              <picture>
                <source media="(min-resolution: 192dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/59d128a4-602a-40b4-b554-cb40be154bee~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/59d128a4-602a-40b4-b554-cb40be154bee~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/59d128a4-602a-40b4-b554-cb40be154bee~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi), (-webkit-min-device-pixel-ratio: 2)" data-srcset="https://media-api.xogrp.com/images/59d128a4-602a-40b4-b554-cb40be154bee~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/59d128a4-602a-40b4-b554-cb40be154bee~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/59d128a4-602a-40b4-b554-cb40be154bee~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/59d128a4-602a-40b4-b554-cb40be154bee~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 1.5)" data-srcset="https://media-api.xogrp.com/images/59d128a4-602a-40b4-b554-cb40be154bee~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/59d128a4-602a-40b4-b554-cb40be154bee~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/59d128a4-602a-40b4-b554-cb40be154bee~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/59d128a4-602a-40b4-b554-cb40be154bee~rt_auto-sc_600.600?ordering=explicit" />
                <source data-srcset="https://media-api.xogrp.com/images/59d128a4-602a-40b4-b554-cb40be154bee~rt_auto-sc_600.600?ordering=explicit" />
                <img loading="lazy" alt="Gallery Photo 13" data-src="https://media-api.xogrp.com/images/59d128a4-602a-40b4-b554-cb40be154bee~rt_auto-rs_600.h?ordering=explicit" src="https://media-api.xogrp.com/images/59d128a4-602a-40b4-b554-cb40be154bee~rt_auto-sc_600.600?ordering=explicit" class="css-mfbvyi" />
              </picture>
              <picture>
                <source media="(min-resolution: 192dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/751db606-4af3-4ec3-b56f-c2ec93b4e5c7~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/751db606-4af3-4ec3-b56f-c2ec93b4e5c7~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/751db606-4af3-4ec3-b56f-c2ec93b4e5c7~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi), (-webkit-min-device-pixel-ratio: 2)" data-srcset="https://media-api.xogrp.com/images/751db606-4af3-4ec3-b56f-c2ec93b4e5c7~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/751db606-4af3-4ec3-b56f-c2ec93b4e5c7~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/751db606-4af3-4ec3-b56f-c2ec93b4e5c7~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/751db606-4af3-4ec3-b56f-c2ec93b4e5c7~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 1.5)" data-srcset="https://media-api.xogrp.com/images/751db606-4af3-4ec3-b56f-c2ec93b4e5c7~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/751db606-4af3-4ec3-b56f-c2ec93b4e5c7~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/751db606-4af3-4ec3-b56f-c2ec93b4e5c7~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/751db606-4af3-4ec3-b56f-c2ec93b4e5c7~rt_auto-sc_600.600?ordering=explicit" />
                <source data-srcset="https://media-api.xogrp.com/images/751db606-4af3-4ec3-b56f-c2ec93b4e5c7~rt_auto-sc_600.600?ordering=explicit" />
                <img loading="lazy" alt="Gallery Photo 14" data-src="https://media-api.xogrp.com/images/751db606-4af3-4ec3-b56f-c2ec93b4e5c7~rt_auto-rs_600.h?ordering=explicit" src="https://media-api.xogrp.com/images/751db606-4af3-4ec3-b56f-c2ec93b4e5c7~rt_auto-sc_600.600?ordering=explicit" class="css-mfbvyi" />
              </picture>
              <picture>
                <source media="(min-resolution: 192dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/03f6a281-4c9e-42ff-856c-dcb51bae6212~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/03f6a281-4c9e-42ff-856c-dcb51bae6212~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/03f6a281-4c9e-42ff-856c-dcb51bae6212~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 192dpi), (-webkit-min-device-pixel-ratio: 2)" data-srcset="https://media-api.xogrp.com/images/03f6a281-4c9e-42ff-856c-dcb51bae6212~rt_auto-sc_1200.1200?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/03f6a281-4c9e-42ff-856c-dcb51bae6212~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/03f6a281-4c9e-42ff-856c-dcb51bae6212~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/03f6a281-4c9e-42ff-856c-dcb51bae6212~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 1.5)" data-srcset="https://media-api.xogrp.com/images/03f6a281-4c9e-42ff-856c-dcb51bae6212~rt_auto-sc_900.900?ordering=explicit" />
                <source media="(min-width: 1280px)" data-srcset="https://media-api.xogrp.com/images/03f6a281-4c9e-42ff-856c-dcb51bae6212~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 1024px)" data-srcset="https://media-api.xogrp.com/images/03f6a281-4c9e-42ff-856c-dcb51bae6212~rt_auto-sc_600.600?ordering=explicit" />
                <source media="(min-width: 768px)" data-srcset="https://media-api.xogrp.com/images/03f6a281-4c9e-42ff-856c-dcb51bae6212~rt_auto-sc_600.600?ordering=explicit" />
                <source data-srcset="https://media-api.xogrp.com/images/03f6a281-4c9e-42ff-856c-dcb51bae6212~rt_auto-sc_600.600?ordering=explicit" />
                <img loading="lazy" alt="Gallery Photo 15" data-src="https://media-api.xogrp.com/images/03f6a281-4c9e-42ff-856c-dcb51bae6212~rt_auto-rs_600.h?ordering=explicit" src="https://media-api.xogrp.com/images/03f6a281-4c9e-42ff-856c-dcb51bae6212~rt_auto-sc_600.600?ordering=explicit" class="css-mfbvyi" />
              </picture>
            </div>
          </div>
        </div>
        <style data-emotion-css="rzmzie">
          .css-rzmzie {
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            margin-top: auto;
            position: relative;
            width: 100%;
          }
        </style>
        <footer class="css-rzmzie">
          <style data-emotion-css="10xb0p9">
            .css-10xb0p9 {
              -webkit-letter-spacing: 3.4px;
              -moz-letter-spacing: 3.4px;
              -ms-letter-spacing: 3.4px;
              letter-spacing: 3.4px;
              line-height: 1;
              margin: 52px auto;
              text-align: center;
              width: -webkit-fit-content;
              width: -moz-fit-content;
              width: fit-content;
            }
          </style>
          <div class="css-10xb0p9">
            <style data-emotion-css="yjgnsf">
              .css-yjgnsf {
                font-family: Parisienne;
                color: #DFD5C0;
                font-size: 60px;
                font-weight: normal;
                padding: 0 18px 16px;
              }

              @media (max-width:640px) {
                .css-yjgnsf {
                  font-size: calc(60px * 0.75);
                }
              }
            </style>
            <div class="css-yjgnsf">R&amp;T</div>
            <style data-emotion-css="1ps3zdn">
              .css-1ps3zdn {
                border-top: 1px solid #DFD5C0;
                font-family: Cormorant;
                -webkit-letter-spacing: 3px;
                -moz-letter-spacing: 3px;
                -ms-letter-spacing: 3px;
                letter-spacing: 3px;
                color: #DFD5C0;
                font-size: 20px;
                font-weight: normal;
                font-style: italic;
                padding: 20px 18px 0;
              }

              @media (max-width:640px) {
                .css-1ps3zdn {
                  font-size: calc(20px * 0.75);
                }
              }
            </style>
            <div class="css-1ps3zdn">10.19.2021</div>
          </div>
          <style data-emotion-css="6dgqpi">
            .css-6dgqpi {
              line-height: 1.75;
              font-family: Cormorant;
              -webkit-letter-spacing: 0px;
              -moz-letter-spacing: 0px;
              -ms-letter-spacing: 0px;
              letter-spacing: 0px;
              color: #DFD5C0;
              font-size: 12px;
              font-weight: 400;
              margin: 12px 0;
              text-align: center;
            }

            @media (max-width:640px) {
              .css-6dgqpi {
                font-size: calc(12px * 0.8333);
              }
            }
          </style>
          <div class="css-6dgqpi">Created on The Knot
            <!-- -->, designed by Elli. <br />Getting married? <style data-emotion-css="1gc3suc">
              .css-1gc3suc {
                font-family: Cormorant;
                -webkit-letter-spacing: 0px;
                -moz-letter-spacing: 0px;
                -ms-letter-spacing: 0px;
                letter-spacing: 0px;
                color: #DFD5C0;
                font-size: 12px;
                font-weight: 400;
              }

              @media (max-width:640px) {
                .css-1gc3suc {
                  font-size: calc(12px * 0.8333);
                }
              }
            </style>
            <a href="https://www.theknot.com/gs/wedding-websites" rel="noopener noreferrer" style="text-decoration:underline" target="_blank" class="css-1gc3suc">Create your wedding website for free.</a>
          </div>
          <style data-emotion-css="2n7u8u">
            .css-2n7u8u {
              width: 100%;
              max-height: 120px;
              min-width: 380px;
              max-width: 2650px;
            }
          </style>
          <picture class="css-2n7u8u">
            <source media="(min-resolution: 192dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1280px)" srcSet="https://media-api.xogrp.com/images/f6eb0a31-19e0-45a9-905c-513a066318f7~rt_auto-rs_2560.h?ordering=explicit" />
            <source media="(min-resolution: 192dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 1024px)" srcSet="https://media-api.xogrp.com/images/f6eb0a31-19e0-45a9-905c-513a066318f7~rt_auto-rs_2048.h?ordering=explicit" />
            <source media="(min-resolution: 192dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 2) and (min-width: 768px)" srcSet="https://media-api.xogrp.com/images/f6eb0a31-19e0-45a9-905c-513a066318f7~rt_auto-rs_1536.h?ordering=explicit" />
            <source media="(min-resolution: 192dpi), (-webkit-min-device-pixel-ratio: 2)" srcSet="https://media-api.xogrp.com/images/2a3ea91c-e5e9-4270-a14f-345d4fd5cb03~rt_auto-rs_1200.h?ordering=explicit" />
            <source media="(min-resolution: 144dpi) and (min-width: 1280px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1280px)" srcSet="https://media-api.xogrp.com/images/f6eb0a31-19e0-45a9-905c-513a066318f7~rt_auto-rs_1920.h?ordering=explicit" />
            <source media="(min-resolution: 144dpi) and (min-width: 1024px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 1024px)" srcSet="https://media-api.xogrp.com/images/f6eb0a31-19e0-45a9-905c-513a066318f7~rt_auto-rs_1536.h?ordering=explicit" />
            <source media="(min-resolution: 144dpi) and (min-width: 768px),(-webkit-min-device-pixel-ratio: 1.5) and (min-width: 768px)" srcSet="https://media-api.xogrp.com/images/f6eb0a31-19e0-45a9-905c-513a066318f7~rt_auto-rs_1152.h?ordering=explicit" />
            <source media="(min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 1.5)" srcSet="https://media-api.xogrp.com/images/2a3ea91c-e5e9-4270-a14f-345d4fd5cb03~rt_auto-rs_900.h?ordering=explicit" />
            <source media="(min-width: 1280px)" srcSet="https://media-api.xogrp.com/images/f6eb0a31-19e0-45a9-905c-513a066318f7~rt_auto-rs_1280.h?ordering=explicit" />
            <source media="(min-width: 1024px)" srcSet="https://media-api.xogrp.com/images/f6eb0a31-19e0-45a9-905c-513a066318f7~rt_auto-rs_1024.h?ordering=explicit" />
            <source media="(min-width: 768px)" srcSet="https://media-api.xogrp.com/images/f6eb0a31-19e0-45a9-905c-513a066318f7~rt_auto-rs_768.h?ordering=explicit" />
            <source srcSet="https://media-api.xogrp.com/images/2a3ea91c-e5e9-4270-a14f-345d4fd5cb03~rt_auto-rs_600.h?ordering=explicit" />
            <img loading="eager" alt="" src="https://media-api.xogrp.com/images/f6eb0a31-19e0-45a9-905c-513a066318f7~rt_auto-rs_768.h?ordering=explicit" class="css-1ago99h" />
          </picture>
        </footer>
      </div>
    </div>
    <script id="__NEXT_DATA__" type="application/json">
      {
        "props": {
          "pageProps": {},
          "apolloState": {
            "GDS_GuestWedding:e982df15-372e-44a3-aafd-d71ce363f95e": {
              "id": "e982df15-372e-44a3-aafd-d71ce363f95e",
              "__typename": "GDS_GuestWedding",
              "isPrivateRsvp": true,
              "rsvpAsAPage": true,
              "rsvpPageHidden": false
            },
            "GDS_Event:2246ceb0-b187-404d-a716-b303446fb2be": {
              "id": "2246ceb0-b187-404d-a716-b303446fb2be",
              "__typename": "GDS_Event",
              "attire": null,
              "endTime": "00:30",
              "name": "Holy Matrimony",
              "notes": null,
              "time": "11:00",
              "type": "WeddingEvent",
              "visible": false,
              "date": "2021-08-16",
              "requireRsvp": true,
              "sameVenue": null,
              "location": {
                "__typename": "GDS_Location",
                "fullAddress": "No.19-21 Jalan Mohammad Toha, Jawa Barat, 40252, Indonesia",
                "name": "Gereja Katolik Santo Paulus"
              },
              "subEvents": null
            },
            "GDS_Event:83cd0fd9-b464-4329-9610-1e26eeeb637b": {
              "id": "83cd0fd9-b464-4329-9610-1e26eeeb637b",
              "__typename": "GDS_Event",
              "attire": null,
              "endTime": null,
              "name": "Wedding Party",
              "notes": null,
              "time": "16:30",
              "type": "WeddingDay",
              "visible": false,
              "date": "2021-10-19",
              "requireRsvp": true,
              "sameVenue": null,
              "location": {
                "__typename": "GDS_Location",
                "fullAddress": "Jl. Dr. Setiabudi No.269 275, Isola, Kec. Sukasari, Kota Bandung, Jawa Barat 40154, Bandung",
                "name": "Grand Mercure Setiabudhi"
              },
              "subEvents": null
            },
            "WWS_Theme:816": {
              "id": 816,
              "__typename": "WWS_Theme",
              "name": "Rustic Leaves",
              "themeStyles": [{
                "id": 331,
                "created_at": "2020-08-11T20:37:42.801Z",
                "updated_at": "2020-08-11T20:37:42.801Z",
                "styles": {
                  "config": {
                    "headerOnHero": false
                  },
                  "images": {
                    "top": "https://media-api.xogrp.com/images/39a0bd4c-195f-4204-8d95-9b52c95090bf",
                    "bottom": "https://media-api.xogrp.com/images/f6eb0a31-19e0-45a9-905c-513a066318f7"
                  },
                  "responsiveImages": {
                    "top": {
                      "smUrl": "https://media-api.xogrp.com/images/f608335b-113e-4e59-a162-5b736157b5b2"
                    },
                    "bottom": {
                      "smUrl": "https://media-api.xogrp.com/images/2a3ea91c-e5e9-4270-a14f-345d4fd5cb03"
                    }
                  },
                  "colors": {
                    "background": "#405262",
                    "primary": "#DFD5C0",
                    "primaryHover": "#DFD5C0",
                    "primaryDisabled": "#DFD5C0"
                  },
                  "fonts": {
                    "s1": {
                      "fontFamily": "Parisienne",
                      "color": "#DFD5C0",
                      "fontSize": "60px",
                      "fontWeight": "normal"
                    },
                    "s2": {
                      "fontFamily": "Cormorant",
                      "color": "#DFD5C0",
                      "fontSize": "42px",
                      "fontWeight": "normal",
                      "letterSpacing": "0px",
                      "textTransform": "uppercase"
                    },
                    "s3": {
                      "fontFamily": "Parisienne",
                      "color": "#DFD5C0",
                      "fontSize": "32px",
                      "fontWeight": "normal"
                    },
                    "s4": {
                      "fontFamily": "Cormorant",
                      "letterSpacing": "2px",
                      "color": "#DFD5C0",
                      "fontSize": "24px",
                      "fontWeight": "normal",
                      "textTransform": "uppercase"
                    },
                    "s5": {
                      "fontFamily": "Cormorant",
                      "letterSpacing": "3px",
                      "color": "#DFD5C0",
                      "fontSize": "20px",
                      "fontWeight": "normal",
                      "fontStyle": "italic"
                    },
                    "s6": {
                      "fontFamily": "Cormorant",
                      "letterSpacing": "0px",
                      "color": "#DFD5C0",
                      "fontSize": "16px",
                      "fontWeight": "400"
                    },
                    "tiny": {
                      "fontFamily": "Cormorant",
                      "letterSpacing": "0px",
                      "color": "#DFD5C0",
                      "fontSize": "12px",
                      "fontWeight": "400"
                    },
                    "title": {},
                    "dateLocation": {},
                    "nav": {},
                    "sectionTitle": {},
                    "itemTitle": {},
                    "body": {},
                    "bodyStrong": {}
                  },
                  "components": {
                    "Button": {
                      "backgroundColor": "#DFD5C0",
                      "color": "#405262",
                      "textTransform": "uppercase",
                      "letterSpacing": "2px",
                      "fontWeight": "700"
                    },
                    "ButtonHover": {
                      "backgroundColor": "#c9c0ad",
                      "color": "#405262"
                    },
                    "SiteTitle": {
                      "paddingTop": "100px",
                      "paddingBottom": "20px",
                      "@media(max-width: 1200px)": {
                        "paddingTop": "90px"
                      },
                      "@media(max-width: 500px)": {
                        "paddingTop": "45px"
                      },
                      "@media(min-width: 1920px)": {
                        "paddingTop": "180px"
                      }
                    },
                    "Hero": {
                      "@media(min-width: 768px)": {
                        "paddingLeft": "20px",
                        "paddingRight": "20px",
                        "maxWidth": "1200px"
                      }
                    },
                    "TopImage": {
                      "minWidth": "380px",
                      "maxWidth": "2560px",
                      "alignSelf": "flex-start"
                    },
                    "BottomImage": {
                      "minWidth": "380px",
                      "maxWidth": "2650px"
                    },
                    "Nav": {
                      "Desktop": {
                        "margin-top": "25px"
                      }
                    },
                    "Card": {}
                  },
                  "email": {
                    "colors": {
                      "background": "#fff",
                      "primary": "#000",
                      "primaryHover": "#000",
                      "primaryDisabled": "#000"
                    },
                    "fonts": {
                      "s1": {
                        "fontFamily": "EB Garamond",
                        "color": "#000",
                        "fontSize": "60px",
                        "fontWeight": "normal",
                        "textTransform": "uppercase"
                      },
                      "s2": {
                        "fontFamily": "EB Garamond",
                        "color": "#000",
                        "fontSize": "42px",
                        "fontWeight": "normal",
                        "letterSpacing": "0px",
                        "textTransform": "uppercase"
                      },
                      "s3": {
                        "fontFamily": "EB Garamond",
                        "color": "#000",
                        "fontSize": "32px",
                        "fontWeight": "normal"
                      },
                      "s4": {
                        "fontFamily": "EB Garamond",
                        "letterSpacing": "0px",
                        "color": "#000",
                        "fontSize": "24px",
                        "fontWeight": "normal"
                      },
                      "s5": {
                        "fontFamily": "EB Garamond",
                        "letterSpacing": "0px",
                        "color": "#000",
                        "fontSize": "20px",
                        "fontWeight": "normal",
                        "fontStyle": "italic"
                      },
                      "s6": {
                        "fontFamily": "EB Garamond",
                        "letterSpacing": "0px",
                        "color": "#000",
                        "fontSize": "16px",
                        "fontWeight": "300"
                      },
                      "tiny": {
                        "fontFamily": "EB Garamond",
                        "letterSpacing": "0px",
                        "color": "#000",
                        "fontSize": "12px",
                        "fontWeight": "300"
                      },
                      "title": {},
                      "dateLocation": {},
                      "nav": {},
                      "sectionTitle": {},
                      "itemTitle": {},
                      "body": {},
                      "bodyStrong": {}
                    },
                    "components": {
                      "TopImage": {
                        "minWidth": "520px",
                        "alignSelf": "flex-start"
                      },
                      "BackgroundImage": {},
                      "BottomImage": {}
                    }
                  },
                  "RSVP": {
                    "images": {
                      "top": "https://media-api.xogrp.com/images/39a0bd4c-195f-4204-8d95-9b52c95090bf",
                      "bottom": "https://media-api.xogrp.com/images/f6eb0a31-19e0-45a9-905c-513a066318f7"
                    },
                    "responsiveImages": {
                      "top": {
                        "smUrl": "https://media-api.xogrp.com/images/f608335b-113e-4e59-a162-5b736157b5b2"
                      },
                      "bottom": {
                        "smUrl": "https://media-api.xogrp.com/images/2a3ea91c-e5e9-4270-a14f-345d4fd5cb03"
                      }
                    },
                    "colors": {
                      "background": "#405262",
                      "primary": "#DFD5C0",
                      "primaryHover": "#DFD5C0",
                      "primaryDisabled": "#DFD5C0"
                    },
                    "fonts": {
                      "s1": {
                        "fontFamily": "Parisienne",
                        "color": "#DFD5C0",
                        "fontSize": "60px",
                        "fontWeight": "normal"
                      },
                      "s2": {
                        "fontFamily": "Cormorant",
                        "color": "#DFD5C0",
                        "fontSize": "42px",
                        "fontWeight": "normal",
                        "letterSpacing": "0px",
                        "textTransform": "uppercase"
                      },
                      "s3": {
                        "fontFamily": "Cormorant",
                        "color": "#DFD5C0",
                        "fontSize": "32px",
                        "fontWeight": "normal"
                      },
                      "s4": {
                        "fontFamily": "Cormorant",
                        "letterSpacing": "2px",
                        "color": "#DFD5C0",
                        "fontSize": "24px",
                        "fontWeight": "normal",
                        "textTransform": "uppercase"
                      },
                      "s5": {
                        "fontFamily": "Cormorant",
                        "letterSpacing": "3px",
                        "color": "#DFD5C0",
                        "fontSize": "20px",
                        "fontWeight": "normal",
                        "fontStyle": "italic"
                      },
                      "s6": {
                        "fontFamily": "Cormorant",
                        "letterSpacing": "0px",
                        "color": "#DFD5C0",
                        "fontSize": "16px",
                        "fontWeight": "400"
                      },
                      "tiny": {
                        "fontFamily": "Cormorant",
                        "letterSpacing": "0px",
                        "color": "#DFD5C0",
                        "fontSize": "12px",
                        "fontWeight": "400"
                      },
                      "title": {},
                      "dateLocation": {},
                      "nav": {},
                      "sectionTitle": {},
                      "itemTitle": {},
                      "body": {},
                      "bodyStrong": {}
                    },
                    "components": {
                      "TopImage": {
                        "minWidth": "380px",
                        "maxWidth": "none",
                        "alignSelf": "flex-start"
                      },
                      "BackgroundImage": {},
                      "BottomImage": {},
                      "SiteTitle": {}
                    }
                  }
                },
                "theme_id": 816
              }],
              "themeDesigner": {
                "__typename": "WWS_ThemeDesigner",
                "name": "Elli",
                "companyName": "Elli"
              }
            },
            "WWS_Announcement:86477": {
              "id": 86477,
              "__typename": "WWS_Announcement",
              "icon": null,
              "message": "Please make sure you're in good health to attend. If you feel unwell, just stay at home. All guests attending are required to wear mask. Thankyou for your understanding and we wish you all good health. We really appreciate your support and blessings.",
              "show": true
            },
            "WWS_EventGroupItem:18904213": {
              "id": 18904213,
              "__typename": "WWS_EventGroupItem",
              "type": "EventGroupItem",
              "rank": 1
            },
            "WWS_Page:34643033": {
              "id": 34643033,
              "__typename": "WWS_Page",
              "routeName": "",
              "show": true,
              "title": "Our Wedding",
              "type": "WeddingPage",
              "items": [{
                "__ref": "WWS_EventGroupItem:18904213"
              }]
            },
            "WWS_Page:34643034": {
              "id": 34643034,
              "__typename": "WWS_Page",
              "routeName": "our-story",
              "show": false,
              "title": "Our Story",
              "type": "StoryPage",
              "items": []
            },
            "WWS_Page:34643035": {
              "id": 34643035,
              "__typename": "WWS_Page",
              "routeName": "travel",
              "show": false,
              "title": "Travel",
              "type": "TravelPage",
              "items": []
            },
            "WWS_Page:34643036": {
              "id": 34643036,
              "__typename": "WWS_Page",
              "routeName": "things-to-do",
              "show": false,
              "title": "Things to Do",
              "type": "ThingsToDoPage",
              "items": []
            },
            "WWS_Page:34643037": {
              "id": 34643037,
              "__typename": "WWS_Page",
              "routeName": "wedding-party",
              "show": false,
              "title": "Wedding Party",
              "type": "WeddingPartyPage",
              "items": []
            },
            "WWS_PhotoItem:25394403": {
              "id": 25394403,
              "__typename": "WWS_PhotoItem",
              "caption": null,
              "height": 720,
              "mediaApiId": "95ed42b3-ee9b-4344-a78a-47e1d8b880e3",
              "cropX": null,
              "cropY": null,
              "rotation": null,
              "mediaUrl": "https://media-api.xogrp.com/images/95ed42b3-ee9b-4344-a78a-47e1d8b880e3",
              "width": 1080
            },
            "WWS_PhotoItem:25394450": {
              "id": 25394450,
              "__typename": "WWS_PhotoItem",
              "caption": null,
              "height": 1620,
              "mediaApiId": "66e3fc32-6add-4b6d-9cf3-d2629fbd217b",
              "cropX": null,
              "cropY": null,
              "rotation": null,
              "mediaUrl": "https://media-api.xogrp.com/images/66e3fc32-6add-4b6d-9cf3-d2629fbd217b",
              "width": 1080
            },
            "WWS_PhotoItem:25394444": {
              "id": 25394444,
              "__typename": "WWS_PhotoItem",
              "caption": null,
              "height": 1620,
              "mediaApiId": "0cdd94c9-6367-4eaf-b5d2-b6068ddabc8a",
              "cropX": null,
              "cropY": null,
              "rotation": null,
              "mediaUrl": "https://media-api.xogrp.com/images/0cdd94c9-6367-4eaf-b5d2-b6068ddabc8a",
              "width": 1080
            },
            "WWS_PhotoItem:25394445": {
              "id": 25394445,
              "__typename": "WWS_PhotoItem",
              "caption": null,
              "height": 1620,
              "mediaApiId": "951cdb00-3d9f-48d1-a4b0-e71c0d88f70f",
              "cropX": null,
              "cropY": null,
              "rotation": null,
              "mediaUrl": "https://media-api.xogrp.com/images/951cdb00-3d9f-48d1-a4b0-e71c0d88f70f",
              "width": 1080
            },
            "WWS_PhotoItem:25394452": {
              "id": 25394452,
              "__typename": "WWS_PhotoItem",
              "caption": null,
              "height": 1620,
              "mediaApiId": "e0ad5113-7d4c-4276-af5c-7a21f082d1ac",
              "cropX": null,
              "cropY": null,
              "rotation": null,
              "mediaUrl": "https://media-api.xogrp.com/images/e0ad5113-7d4c-4276-af5c-7a21f082d1ac",
              "width": 1080
            },
            "WWS_PhotoItem:25394447": {
              "id": 25394447,
              "__typename": "WWS_PhotoItem",
              "caption": null,
              "height": 757,
              "mediaApiId": "877f6f48-dc17-48dc-81b1-f78639025846",
              "cropX": null,
              "cropY": null,
              "rotation": null,
              "mediaUrl": "https://media-api.xogrp.com/images/877f6f48-dc17-48dc-81b1-f78639025846",
              "width": 1080
            },
            "WWS_PhotoItem:25394443": {
              "id": 25394443,
              "__typename": "WWS_PhotoItem",
              "caption": null,
              "height": 1620,
              "mediaApiId": "7c5f3f6c-cb29-4fa8-ad7b-54da86724466",
              "cropX": null,
              "cropY": null,
              "rotation": null,
              "mediaUrl": "https://media-api.xogrp.com/images/7c5f3f6c-cb29-4fa8-ad7b-54da86724466",
              "width": 1080
            },
            "WWS_PhotoItem:25394449": {
              "id": 25394449,
              "__typename": "WWS_PhotoItem",
              "caption": null,
              "height": 1620,
              "mediaApiId": "61a5cad9-6c16-4ffb-9534-c422f7900532",
              "cropX": null,
              "cropY": null,
              "rotation": null,
              "mediaUrl": "https://media-api.xogrp.com/images/61a5cad9-6c16-4ffb-9534-c422f7900532",
              "width": 1080
            },
            "WWS_PhotoItem:25394451": {
              "id": 25394451,
              "__typename": "WWS_PhotoItem",
              "caption": null,
              "height": 1620,
              "mediaApiId": "66bc043f-80a8-46a0-a0ec-ea891fd36d16",
              "cropX": null,
              "cropY": null,
              "rotation": null,
              "mediaUrl": "https://media-api.xogrp.com/images/66bc043f-80a8-46a0-a0ec-ea891fd36d16",
              "width": 1080
            },
            "WWS_PhotoItem:28335712": {
              "id": 28335712,
              "__typename": "WWS_PhotoItem",
              "caption": null,
              "height": 745,
              "mediaApiId": "5170fa87-b058-4997-b88c-cb6e96474d76",
              "cropX": null,
              "cropY": null,
              "rotation": null,
              "mediaUrl": "https://media-api.xogrp.com/images/5170fa87-b058-4997-b88c-cb6e96474d76",
              "width": 745
            },
            "WWS_PhotoItem:28335713": {
              "id": 28335713,
              "__typename": "WWS_PhotoItem",
              "caption": null,
              "height": 830,
              "mediaApiId": "34e178d1-756a-4d3e-8205-519e351cf5f2",
              "cropX": null,
              "cropY": null,
              "rotation": null,
              "mediaUrl": "https://media-api.xogrp.com/images/34e178d1-756a-4d3e-8205-519e351cf5f2",
              "width": 830
            },
            "WWS_PhotoItem:28335714": {
              "id": 28335714,
              "__typename": "WWS_PhotoItem",
              "caption": null,
              "height": 736,
              "mediaApiId": "565d48e1-13f7-4eb9-b1f1-9f461ce18078",
              "cropX": null,
              "cropY": null,
              "rotation": null,
              "mediaUrl": "https://media-api.xogrp.com/images/565d48e1-13f7-4eb9-b1f1-9f461ce18078",
              "width": 736
            },
            "WWS_PhotoItem:28335715": {
              "id": 28335715,
              "__typename": "WWS_PhotoItem",
              "caption": null,
              "height": 743,
              "mediaApiId": "59d128a4-602a-40b4-b554-cb40be154bee",
              "cropX": null,
              "cropY": null,
              "rotation": null,
              "mediaUrl": "https://media-api.xogrp.com/images/59d128a4-602a-40b4-b554-cb40be154bee",
              "width": 743
            },
            "WWS_PhotoItem:28335716": {
              "id": 28335716,
              "__typename": "WWS_PhotoItem",
              "caption": null,
              "height": 812,
              "mediaApiId": "751db606-4af3-4ec3-b56f-c2ec93b4e5c7",
              "cropX": null,
              "cropY": null,
              "rotation": null,
              "mediaUrl": "https://media-api.xogrp.com/images/751db606-4af3-4ec3-b56f-c2ec93b4e5c7",
              "width": 812
            },
            "WWS_PhotoItem:28335718": {
              "id": 28335718,
              "__typename": "WWS_PhotoItem",
              "caption": null,
              "height": 2366,
              "mediaApiId": "03f6a281-4c9e-42ff-856c-dcb51bae6212",
              "cropX": null,
              "cropY": null,
              "rotation": null,
              "mediaUrl": "https://media-api.xogrp.com/images/03f6a281-4c9e-42ff-856c-dcb51bae6212",
              "width": 1577
            },
            "WWS_PhotoGalleryItem:25394402": {
              "id": 25394402,
              "__typename": "WWS_PhotoGalleryItem",
              "type": "PhotoGalleryItem",
              "rank": 0,
              "layout": "grid",
              "photoItems": [{
                "__ref": "WWS_PhotoItem:25394403"
              }, {
                "__ref": "WWS_PhotoItem:25394450"
              }, {
                "__ref": "WWS_PhotoItem:25394444"
              }, {
                "__ref": "WWS_PhotoItem:25394445"
              }, {
                "__ref": "WWS_PhotoItem:25394452"
              }, {
                "__ref": "WWS_PhotoItem:25394447"
              }, {
                "__ref": "WWS_PhotoItem:25394443"
              }, {
                "__ref": "WWS_PhotoItem:25394449"
              }, {
                "__ref": "WWS_PhotoItem:25394451"
              }, {
                "__ref": "WWS_PhotoItem:28335712"
              }, {
                "__ref": "WWS_PhotoItem:28335713"
              }, {
                "__ref": "WWS_PhotoItem:28335714"
              }, {
                "__ref": "WWS_PhotoItem:28335715"
              }, {
                "__ref": "WWS_PhotoItem:28335716"
              }, {
                "__ref": "WWS_PhotoItem:28335718"
              }]
            },
            "WWS_Page:34643038": {
              "id": 34643038,
              "__typename": "WWS_Page",
              "routeName": "photos",
              "show": true,
              "title": "Photos",
              "type": "PhotoPage",
              "items": [{
                "__ref": "WWS_PhotoGalleryItem:25394402"
              }]
            },
            "WWS_Page:34643039": {
              "id": 34643039,
              "__typename": "WWS_Page",
              "routeName": "q-a",
              "show": false,
              "title": "Q + A",
              "type": "QAPage",
              "items": []
            },
            "WWS_Page:34643040": {
              "id": 34643040,
              "__typename": "WWS_Page",
              "routeName": "registry",
              "show": true,
              "title": "Registry",
              "type": "RegistryPage",
              "items": []
            },
            "WWS_WeddingWebsiteV2:19870262": {
              "id": 19870262,
              "__typename": "WWS_WeddingWebsiteV2",
              "theme({\"themeId\":null})": {
                "__ref": "WWS_Theme:816"
              },
              "fianceFirstName": "Theresa",
              "fianceLastName": "Aldeva",
              "firstName": "Rommy",
              "lastName": "Darmawan",
              "hideCountdown": false,
              "hideDate": false,
              "registryNote": null,
              "slug": "rommy-darmawan-and-theresa-aldeva-oct-2021",
              "userUuid": "323e027d-40c2-4a8b-9c62-8e44423c1771",
              "vanityRoot": "theknot.com/",
              "weddingLocation": "",
              "weddingDateFormat": "weekday",
              "searchEngineIndexable": true,
              "weddingDateRangeStart": null,
              "weddingDateRangeEnd": null,
              "weddingUuid": "e982df15-372e-44a3-aafd-d71ce363f95e",
              "announcement": {
                "__ref": "WWS_Announcement:86477"
              },
              "purchaseDomain": null,
              "coverPhotoPathWithCropbox": "//media.xogrp.com/images/1dc34119-81ef-45bc-98f6-8f992e06d256~rt_0-cr_0.363.1065.896?compress=true",
              "coverPhoto": {
                "__typename": "WWS_CoverPhoto",
                "path": "//media.xogrp.com/images/1dc34119-81ef-45bc-98f6-8f992e06d256",
                "cropBox": "0.363.1065.896",
                "width": 1065,
                "height": 533
              },
              "photoAlbums": [],
              "pages": [{
                "__ref": "WWS_Page:34643033"
              }, {
                "__ref": "WWS_Page:34643034"
              }, {
                "__ref": "WWS_Page:34643035"
              }, {
                "__ref": "WWS_Page:34643036"
              }, {
                "__ref": "WWS_Page:34643037"
              }, {
                "__ref": "WWS_Page:34643038"
              }, {
                "__ref": "WWS_Page:34643039"
              }, {
                "__ref": "WWS_Page:34643040"
              }]
            },
            "ROOT_QUERY": {
              "__typename": "Query",
              "guestWedding": {
                "__ref": "GDS_GuestWedding:e982df15-372e-44a3-aafd-d71ce363f95e"
              },
              "events": [{
                "__ref": "GDS_Event:2246ceb0-b187-404d-a716-b303446fb2be"
              }, {
                "__ref": "GDS_Event:83cd0fd9-b464-4329-9610-1e26eeeb637b"
              }],
              "weddingWebsiteResult({\"slugOrVanity\":\"rommy-darmawan-and-theresa-aldeva-oct-2021\"})": {
                "__ref": "WWS_WeddingWebsiteV2:19870262"
              },
              "wedding": {
                "__typename": "Wedding",
                "weddingDate": "2021-10-19",
                "season": null
              }
            }
          },
          "apolloClient": null
        },
        "page": "/[pathPrefix]/[slug]/[[...route]]",
        "query": {
          "pathPrefix": "us",
          "slug": "rommy-darmawan-and-theresa-aldeva-oct-2021",
          "route": ["photos"]
        },
        "buildId": "Ozi5C7syRrzIOZkdAk-GN",
        "assetPrefix": "https://static.theknot.com/wws-guest-view",
        "runtimeConfig": {
          "consentManagementSnippet": "\u003cscript class=\"ot-sdk-show-settings\" id=\"Union__consent-management__snippet\"\u003ewindow.UnionConsentManagement=function(){window.OnetrustActiveGroups=\",C0001,C0002,C0003,C0004,C0005,\",window.OneTrust={ToggleInfoDisplay:function(){},OnConsentChanged:function(){}};var t=\"Necessary\",i=\"Analytic\",r=\"Personalisation\",c=\"Targeting\",s=\"Social\",a={C0001:t,C0002:i,C0003:r,C0004:c,C0005:s},e=\"not_loaded\",o=!1,u=[],d={};function f(n){var e=l.getConsentedCategories(),o=Object.keys(a).map(function(n){return a[n]});n.setup({consentedToAll:o.every(function(n){return 0\u003c=e.indexOf(n)}),consentedToAny:o.filter(function(n){return n!==t}).some(function(n){return 0\u003c=e.indexOf(n)}),consentedToNecessary:0\u003c=e.indexOf(t),consentedToAnalytic:0\u003c=e.indexOf(i),consentedToPersonalisation:0\u003c=e.indexOf(r),consentedToTargeting:0\u003c=e.indexOf(c),consentedToSocial:0\u003c=e.indexOf(s),consentedTo:function(){return Array.prototype.slice.call(arguments).every(function(n){return 0\u003c=e.indexOf(n)})},categories:e})}function g(n,e){if(n===t||o\u0026\u0026l.consentedTo(n))return e();d[n].push(e)}d[t]=[],d[i]=[],d[r]=[],d[c]=[];var l={version:\"0.5.5\",consentPlatformEnabled:!(d[s]=[]),registerService:function(n){o\u0026\u0026f(n),u.push(n)},getConsentedCategories:function(){return(window.OnetrustActiveGroups||\",C0001,\").split(\",\").filter(function(n){return n\u0026\u0026a[n]}).map(function(n){return a[n]})},togglePreferencesModal:function(){e=\"changing\",OneTrust.ToggleInfoDisplay(),OneTrust.OnConsentChanged(function(){window.location.reload()})},consentedTo:function(n){return 0\u003c=l.getConsentedCategories().indexOf(n)},onConsentedToNecessary:function(n){return g(t,n)},onConsentedToAnalytic:function(n){return g(i,n)},onConsentedToPersonalisation:function(n){return g(r,n)},onConsentedToTargeting:function(n){return g(c,n)},onConsentedToSocial:function(n){return g(s,n)}};return window.OptanonWrapper=function(){var n;o=!0,\"loading\"!==(e=\"not_loaded\"===(n=e)?\"loading\":\"loading\"===n?\"changing\":\"done\")\u0026\u0026\"changing\"!==e||u.forEach(function(n){f(n)}),l.getConsentedCategories().forEach(function(n){d[n].forEach(function(n){n()}),d[n]=[]})},window.OptanonWrapper(),l}()\u003c/script\u003e\n",
          "segmentSnippet": "\u003cscript type=\"text/javascript\"\u003e!function(){var i=window.analytics=window.analytics||[];if(!i.initialize)if(i.invoked)window.console\u0026\u0026console.error\u0026\u0026console.error(\"Segment snippet included twice.\");else{i.invoked=!0,i.methods=[\"trackSubmit\",\"trackClick\",\"trackLink\",\"trackForm\",\"pageview\",\"identify\",\"reset\",\"group\",\"track\",\"ready\",\"alias\",\"debug\",\"page\",\"once\",\"off\",\"on\",\"addSourceMiddleware\",\"addIntegrationMiddleware\",\"setAnonymousId\",\"addDestinationMiddleware\"],i.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);return e.unshift(t),i.push(e),i}};for(var e=0;e\u003ci.methods.length;e++){var t=i.methods[e];i[t]=i.factory(t)}i.load=function(e,t){var n=document.createElement(\"script\");n.type=\"text/javascript\",n.async=!0,n.src=\"https://cdn.segment.com/analytics.js/v1/\"+e+\"/analytics.min.js\";var a=document.getElementsByTagName(\"script\")[0];a.parentNode.insertBefore(n,a),i._loadOptions=t},i._writeKey=\"nibq354xak\",i.SNIPPET_VERSION=\"4.13.2\"}}()\u003c/script\u003e\n\u003cscript\u003e!function(t,e){if(window.UnionConsentManagement){window.UnionConsentManagement.onSegmentMappingJsLoad=function(n){n(t,e)};var n=document.createElement(\"script\");n.src=\"https://union.theknot.com/dist/v2/tk-analytics/latest/consented-segment.js\",n.type=\"text/javascript\",n.async=!0,document.head.appendChild(n)}else analytics.load(t,e)}(\"nibq354xak\",{})\u003c/script\u003e\n"
        },
        "isFallback": false,
        "customServer": true,
        "gip": true,
        "appGip": true
      }
    </script>
    <script nomodule="" src="https://static.theknot.com/wws-guest-view/_next/static/chunks/polyfills-b5dd53bde2b4c072fee5.js"></script>
    <script src="https://static.theknot.com/wws-guest-view/_next/static/chunks/main-6cf424dc656e4cce3a97.js" async=""></script>
    <script src="https://static.theknot.com/wws-guest-view/_next/static/chunks/webpack-7675728062cc2e40daca.js" async=""></script>
    <script src="https://static.theknot.com/wws-guest-view/_next/static/chunks/framework.92982bd08c20a57f256c.js" async=""></script>
    <script src="https://static.theknot.com/wws-guest-view/_next/static/chunks/commons.e8825c204e22661c36e1.js" async=""></script>
    <script src="https://static.theknot.com/wws-guest-view/_next/static/chunks/b5d9182fe27958a87aeb8cde66a6d0f7ed6e8bb0.936904b2efc1abf4dee0.js" async=""></script>
    <script src="https://static.theknot.com/wws-guest-view/_next/static/chunks/1a315c15a13fed08c83a7623d996d48e437839c8.321367ab509b096f25e6.js" async=""></script>
    <script src="https://static.theknot.com/wws-guest-view/_next/static/chunks/pages/_app-51e404d2a46892f63a7e.js" async=""></script>
    <script src="https://static.theknot.com/wws-guest-view/_next/static/chunks/29107295.9bfd529e3423c89519ae.js" async=""></script>
    <script src="https://static.theknot.com/wws-guest-view/_next/static/chunks/8e131c8851dfc0e2121930b9e0443eadd3e2b49a.e718cd79d05d1d5c58fb.js" async=""></script>
    <script src="https://static.theknot.com/wws-guest-view/_next/static/chunks/pages/%5BpathPrefix%5D/%5Bslug%5D/%5B%5B...route%5D%5D-1fa7068d86ec8cd2113c.js" async=""></script>
    <script src="https://static.theknot.com/wws-guest-view/_next/static/Ozi5C7syRrzIOZkdAk-GN/_buildManifest.js" async=""></script>
    <script src="https://static.theknot.com/wws-guest-view/_next/static/Ozi5C7syRrzIOZkdAk-GN/_ssgManifest.js" async=""></script>
  </body>
  <!-- Mirrored from www.theknot.com/us/rommy-darmawan-and-theresa-aldeva-oct-2021/photos by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Sep 2021 15:27:39 GMT -->
</html>