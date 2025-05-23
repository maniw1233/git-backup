/**
 * wp-bizone WordPress Theme, ordasvit.com
 * wp-bizone is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */
!(function (t) {
    t.extend(t.easing, {
        spincrementEasing: function (t, a, e, n, r) {
            return a === r ? e + n : n * (-Math.pow(2, (-10 * a) / r) + 1) + e;
        },
    }),
        (t.fn.spincrement = function (a) {
            function e(t, a) {
                if (((t = t.toFixed(a)), a > 0 && "." !== r.decimalPoint && (t = t.replace(".", r.decimalPoint)), r.thousandSeparator)) for (; o.test(t);) t = t.replace(o, "$1" + r.thousandSeparator + "$2");
                return t;
            }
            var n = { from: 0, to: null, decimalPlaces: null, decimalPoint: ".", thousandSeparator: ",", duration: 1e3, leeway: 50, easing: "spincrementEasing", fade: !0, complete: null },
                r = t.extend(n, a),
                o = new RegExp(/^(-?[0-9]+)([0-9]{3})/);
            return this.each(function () {
                var a = t(this),
                    n = r.from;
                a.attr("data-from") && (n = parseFloat(a.attr("data-from")));
                var o;
                if (a.attr("data-to")) o = parseFloat(a.attr("data-to"));
                else if (null !== r.to) o = r.to;
                else {
                    var i = t.inArray(r.thousandSeparator, ["\\", "^", "$", "*", "+", "?", "."]) > -1 ? "\\" + r.thousandSeparator : r.thousandSeparator,
                        l = new RegExp(i, "g");
                    o = parseFloat(a.text().replace(l, ""));
                }
                var c = r.duration;
                r.leeway && (c += Math.round((r.duration * (2 * Math.random() - 1) * r.leeway) / 100));
                var s;
                if (a.attr("data-dp")) s = parseInt(a.attr("data-dp"), 10);
                else if (null !== r.decimalPlaces) s = r.decimalPlaces;
                else {
                    var d = a.text().indexOf(r.decimalPoint);
                    s = d > -1 ? a.text().length - (d + 1) : 0;
                }
                a.css("counter", n),
                    r.fade && a.css("opacity", 0.3),
                    a.animate(
                        { counter: o, opacity: 1 },
                        {
                            easing: r.easing,
                            duration: c,
                            step: function (t) {
                                a.html(e(t * o, s));
                            },
                            complete: function () {
                                a.css("counter", null), a.html(e(o, s)), r.complete && r.complete(a);
                            },
                        }
                    );
            });
        });
})(jQuery);
