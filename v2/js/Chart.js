/*!
 * Chart.js
 * http://chartjs.org/
 * Version: 2.7.1
 *
 * Copyright 2017 Nick Downie
 * Released under the MIT license
 * https://github.com/chartjs/Chart.js/blob/master/LICENSE.md
 */
!
function(t) {
	if ("object" == typeof exports && "undefined" != typeof module) module.exports = t();
	else if ("function" == typeof define && define.amd) define([], t);
	else { ("undefined" != typeof window ? window: "undefined" != typeof global ? global: "undefined" != typeof self ? self: this).Chart = t()
	}
} (function() {
	return function t(e, n, i) {
		function a(r, l) {
			if (!n[r]) {
				if (!e[r]) {
					var s = "function" == typeof require && require;
					if (!l && s) return s(r, !0);
					if (o) return o(r, !0);
					var u = new Error("Cannot find module '" + r + "'");
					throw u.code = "MODULE_NOT_FOUND",
					u
				}
				var d = n[r] = {
					exports: {}
				};
				e[r][0].call(d.exports,
				function(t) {
					var n = e[r][1][t];
					return a(n || t)
				},
				d, d.exports, t, e, n, i)
			}
			return n[r].exports
		}
		for (var o = "function" == typeof require && require,
		r = 0; r < i.length; r++) a(i[r]);
		return a
	} ({
		1 : [function(t, e, n) {},
		{}],
		2 : [function(t, e, n) {
			function i(t) {
				if (t) {
					var e = [0, 0, 0],
					n = 1,
					i = t.match(/^#([a-fA-F0-9]{3})$/i);
					if (i) {
						i = i[1];
						for (a = 0; a < e.length; a++) e[a] = parseInt(i[a] + i[a], 16)
					} else if (i = t.match(/^#([a-fA-F0-9]{6})$/i)) {
						i = i[1];
						for (a = 0; a < e.length; a++) e[a] = parseInt(i.slice(2 * a, 2 * a + 2), 16)
					} else if (i = t.match(/^rgba?\(\s*([+-]?\d+)\s*,\s*([+-]?\d+)\s*,\s*([+-]?\d+)\s*(?:,\s*([+-]?[\d\.]+)\s*)?\)$/i)) {
						for (a = 0; a < e.length; a++) e[a] = parseInt(i[a + 1]);
						n = parseFloat(i[4])
					} else if (i = t.match(/^rgba?\(\s*([+-]?[\d\.]+)\%\s*,\s*([+-]?[\d\.]+)\%\s*,\s*([+-]?[\d\.]+)\%\s*(?:,\s*([+-]?[\d\.]+)\s*)?\)$/i)) {
						for (a = 0; a < e.length; a++) e[a] = Math.round(2.55 * parseFloat(i[a + 1]));
						n = parseFloat(i[4])
					} else if (i = t.match(/(\w+)/)) {
						if ("transparent" == i[1]) return [0, 0, 0, 0];
						if (! (e = c[i[1]])) return
					}
					for (var a = 0; a < e.length; a++) e[a] = u(e[a], 0, 255);
					return n = n || 0 == n ? u(n, 0, 1) : 1,
					e[3] = n,
					e
				}
			}
			function a(t) {
				if (t) {
					var e = t.match(/^hsla?\(\s*([+-]?\d+)(?:deg)?\s*,\s*([+-]?[\d\.]+)%\s*,\s*([+-]?[\d\.]+)%\s*(?:,\s*([+-]?[\d\.]+)\s*)?\)/);
					if (e) {
						var n = parseFloat(e[4]);
						return [u(parseInt(e[1]), 0, 360), u(parseFloat(e[2]), 0, 100), u(parseFloat(e[3]), 0, 100), u(isNaN(n) ? 1 : n, 0, 1)]
					}
				}
			}
			function o(t) {
				if (t) {
					var e = t.match(/^hwb\(\s*([+-]?\d+)(?:deg)?\s*,\s*([+-]?[\d\.]+)%\s*,\s*([+-]?[\d\.]+)%\s*(?:,\s*([+-]?[\d\.]+)\s*)?\)/);
					if (e) {
						var n = parseFloat(e[4]);
						return [u(parseInt(e[1]), 0, 360), u(parseFloat(e[2]), 0, 100), u(parseFloat(e[3]), 0, 100), u(isNaN(n) ? 1 : n, 0, 1)]
					}
				}
			}
			function r(t, e) {
				return void 0 === e && (e = void 0 !== t[3] ? t[3] : 1),
				"rgba(" + t[0] + ", " + t[1] + ", " + t[2] + ", " + e + ")"
			}
			function l(t, e) {
				return "rgba(" + Math.round(t[0] / 255 * 100) + "%, " + Math.round(t[1] / 255 * 100) + "%, " + Math.round(t[2] / 255 * 100) + "%, " + (e || t[3] || 1) + ")"
			}
			function s(t, e) {
				return void 0 === e && (e = void 0 !== t[3] ? t[3] : 1),
				"hsla(" + t[0] + ", " + t[1] + "%, " + t[2] + "%, " + e + ")"
			}
			function u(t, e, n) {
				return Math.min(Math.max(e, t), n)
			}
			function d(t) {
				var e = t.toString(16).toUpperCase();
				return e.length < 2 ? "0" + e: e
			}
			var c = t(6);
			e.exports = {
				getRgba: i,
				getHsla: a,
				getRgb: function(t) {
					var e = i(t);
					return e && e.slice(0, 3)
				},
				getHsl: function(t) {
					var e = a(t);
					return e && e.slice(0, 3)
				},
				getHwb: o,
				getAlpha: function(t) {
					var e = i(t);
					return e ? e[3] : (e = a(t)) ? e[3] : (e = o(t)) ? e[3] : void 0
				},
				hexString: function(t) {
					return "#" + d(t[0]) + d(t[1]) + d(t[2])
				},
				rgbString: function(t, e) {
					return e < 1 || t[3] && t[3] < 1 ? r(t, e) : "rgb(" + t[0] + ", " + t[1] + ", " + t[2] + ")"
				},
				rgbaString: r,
				percentString: function(t, e) {
					return e < 1 || t[3] && t[3] < 1 ? l(t, e) : "rgb(" + Math.round(t[0] / 255 * 100) + "%, " + Math.round(t[1] / 255 * 100) + "%, " + Math.round(t[2] / 255 * 100) + "%)"
				},
				percentaString: l,
				hslString: function(t, e) {
					return e < 1 || t[3] && t[3] < 1 ? s(t, e) : "hsl(" + t[0] + ", " + t[1] + "%, " + t[2] + "%)"
				},
				hslaString: s,
				hwbString: function(t, e) {
					return void 0 === e && (e = void 0 !== t[3] ? t[3] : 1),
					"hwb(" + t[0] + ", " + t[1] + "%, " + t[2] + "%" + (void 0 !== e && 1 !== e ? ", " + e: "") + ")"
				},
				keyword: function(t) {
					return h[t.slice(0, 3)]
				}
			};
			var h = {};
			for (var f in c) h[c[f]] = f
		},
		{
			6 : 6
		}],
		3 : [function(t, e, n) {
			var i = t(5),
			a = t(2),
			o = function(t) {
				if (t instanceof o) return t;
				if (! (this instanceof o)) return new o(t);
				this.valid = !1,
				this.values = {
					rgb: [0, 0, 0],
					hsl: [0, 0, 0],
					hsv: [0, 0, 0],
					hwb: [0, 0, 0],
					cmyk: [0, 0, 0, 0],
					alpha: 1
				};
				var e;
				"string" == typeof t ? (e = a.getRgba(t)) ? this.setValues("rgb", e) : (e = a.getHsla(t)) ? this.setValues("hsl", e) : (e = a.getHwb(t)) && this.setValues("hwb", e) : "object" == typeof t && (void 0 !== (e = t).r || void 0 !== e.red ? this.setValues("rgb", e) : void 0 !== e.l || void 0 !== e.lightness ? this.setValues("hsl", e) : void 0 !== e.v || void 0 !== e.value ? this.setValues("hsv", e) : void 0 !== e.w || void 0 !== e.whiteness ? this.setValues("hwb", e) : void 0 === e.c && void 0 === e.cyan || this.setValues("cmyk", e))
			};
			o.prototype = {
				isValid: function() {
					return this.valid
				},
				rgb: function() {
					return this.setSpace("rgb", arguments)
				},
				hsl: function() {
					return this.setSpace("hsl", arguments)
				},
				hsv: function() {
					return this.setSpace("hsv", arguments)
				},
				hwb: function() {
					return this.setSpace("hwb", arguments)
				},
				cmyk: function() {
					return this.setSpace("cmyk", arguments)
				},
				rgbArray: function() {
					return this.values.rgb
				},
				hslArray: function() {
					return this.values.hsl
				},
				hsvArray: function() {
					return this.values.hsv
				},
				hwbArray: function() {
					var t = this.values;
					return 1 !== t.alpha ? t.hwb.concat([t.alpha]) : t.hwb
				},
				cmykArray: function() {
					return this.values.cmyk
				},
				rgbaArray: function() {
					var t = this.values;
					return t.rgb.concat([t.alpha])
				},
				hslaArray: function() {
					var t = this.values;
					return t.hsl.concat([t.alpha])
				},
				alpha: function(t) {
					return void 0 === t ? this.values.alpha: (this.setValues("alpha", t), this)
				},
				red: function(t) {
					return this.setChannel("rgb", 0, t)
				},
				green: function(t) {
					return this.setChannel("rgb", 1, t)
				},
				blue: function(t) {
					return this.setChannel("rgb", 2, t)
				},
				hue: function(t) {
					return t && (t = (t %= 360) < 0 ? 360 + t: t),
					this.setChannel("hsl", 0, t)
				},
				saturation: function(t) {
					return this.setChannel("hsl", 1, t)
				},
				lightness: function(t) {
					return this.setChannel("hsl", 2, t)
				},
				saturationv: function(t) {
					return this.setChannel("hsv", 1, t)
				},
				whiteness: function(t) {
					return this.setChannel("hwb", 1, t)
				},
				blackness: function(t) {
					return this.setChannel("hwb", 2, t)
				},
				value: function(t) {
					return this.setChannel("hsv", 2, t)
				},
				cyan: function(t) {
					return this.setChannel("cmyk", 0, t)
				},
				magenta: function(t) {
					return this.setChannel("cmyk", 1, t)
				},
				yellow: function(t) {
					return this.setChannel("cmyk", 2, t)
				},
				black: function(t) {
					return this.setChannel("cmyk", 3, t)
				},
				hexString: function() {
					return a.hexString(this.values.rgb)
				},
				rgbString: function() {
					return a.rgbString(this.values.rgb, this.values.alpha)
				},
				rgbaString: function() {
					return a.rgbaString(this.values.rgb, this.values.alpha)
				},
				percentString: function() {
					return a.percentString(this.values.rgb, this.values.alpha)
				},
				hslString: function() {
					return a.hslString(this.values.hsl, this.values.alpha)
				},
				hslaString: function() {
					return a.hslaString(this.values.hsl, this.values.alpha)
				},
				hwbString: function() {
					return a.hwbString(this.values.hwb, this.values.alpha)
				},
				keyword: function() {
					return a.keyword(this.values.rgb, this.values.alpha)
				},
				rgbNumber: function() {
					var t = this.values.rgb;
					return t[0] << 16 | t[1] << 8 | t[2]
				},
				luminosity: function() {
					for (var t = this.values.rgb,
					e = [], n = 0; n < t.length; n++) {
						var i = t[n] / 255;
						e[n] = i <= .03928 ? i / 12.92 : Math.pow((i + .055) / 1.055, 2.4)
					}
					return.2126 * e[0] + .7152 * e[1] + .0722 * e[2]
				},
				contrast: function(t) {
					var e = this.luminosity(),
					n = t.luminosity();
					return e > n ? (e + .05) / (n + .05) : (n + .05) / (e + .05)
				},
				level: function(t) {
					var e = this.contrast(t);
					return e >= 7.1 ? "AAA": e >= 4.5 ? "AA": ""
				},
				dark: function() {
					var t = this.values.rgb;
					return (299 * t[0] + 587 * t[1] + 114 * t[2]) / 1e3 < 128
				},
				light: function() {
					return ! this.dark()
				},
				negate: function() {
					for (var t = [], e = 0; e < 3; e++) t[e] = 255 - this.values.rgb[e];
					return this.setValues("rgb", t),
					this
				},
				lighten: function(t) {
					var e = this.values.hsl;
					return e[2] += e[2] * t,
					this.setValues("hsl", e),
					this
				},
				darken: function(t) {
					var e = this.values.hsl;
					return e[2] -= e[2] * t,
					this.setValues("hsl", e),
					this
				},
				saturate: function(t) {
					var e = this.values.hsl;
					return e[1] += e[1] * t,
					this.setValues("hsl", e),
					this
				},
				desaturate: function(t) {
					var e = this.values.hsl;
					return e[1] -= e[1] * t,
					this.setValues("hsl", e),
					this
				},
				whiten: function(t) {
					var e = this.values.hwb;
					return e[1] += e[1] * t,
					this.setValues("hwb", e),
					this
				},
				blacken: function(t) {
					var e = this.values.hwb;
					return e[2] += e[2] * t,
					this.setValues("hwb", e),
					this
				},
				greyscale: function() {
					var t = this.values.rgb,
					e = .3 * t[0] + .59 * t[1] + .11 * t[2];
					return this.setValues("rgb", [e, e, e]),
					this
				},
				clearer: function(t) {
					var e = this.values.alpha;
					return this.setValues("alpha", e - e * t),
					this
				},
				opaquer: function(t) {
					var e = this.values.alpha;
					return this.setValues("alpha", e + e * t),
					this
				},
				rotate: function(t) {
					var e = this.values.hsl,
					n = (e[0] + t) % 360;
					return e[0] = n < 0 ? 360 + n: n,
					this.setValues("hsl", e),
					this
				},
				mix: function(t, e) {
					var n = this,
					i = t,
					a = void 0 === e ? .5 : e,
					o = 2 * a - 1,
					r = n.alpha() - i.alpha(),
					l = ((o * r == -1 ? o: (o + r) / (1 + o * r)) + 1) / 2,
					s = 1 - l;
					return this.rgb(l * n.red() + s * i.red(), l * n.green() + s * i.green(), l * n.blue() + s * i.blue()).alpha(n.alpha() * a + i.alpha() * (1 - a))
				},
				toJSON: function() {
					return this.rgb()
				},
				clone: function() {
					var t, e, n = new o,
					i = this.values,
					a = n.values;
					for (var r in i) i.hasOwnProperty(r) && (t = i[r], "[object Array]" === (e = {}.toString.call(t)) ? a[r] = t.slice(0) : "[object Number]" === e ? a[r] = t: console.error("unexpected color value:", t));
					return n
				}
			},
			o.prototype.spaces = {
				rgb: ["red", "green", "blue"],
				hsl: ["hue", "saturation", "lightness"],
				hsv: ["hue", "saturation", "value"],
				hwb: ["hue", "whiteness", "blackness"],
				cmyk: ["cyan", "magenta", "yellow", "black"]
			},
			o.prototype.maxes = {
				rgb: [255, 255, 255],
				hsl: [360, 100, 100],
				hsv: [360, 100, 100],
				hwb: [360, 100, 100],
				cmyk: [100, 100, 100, 100]
			},
			o.prototype.getValues = function(t) {
				for (var e = this.values,
				n = {},
				i = 0; i < t.length; i++) n[t.charAt(i)] = e[t][i];
				return 1 !== e.alpha && (n.a = e.alpha),
				n
			},
			o.prototype.setValues = function(t, e) {
				var n, a = this.values,
				o = this.spaces,
				r = this.maxes,
				l = 1;
				if (this.valid = !0, "alpha" === t) l = e;
				else if (e.length) a[t] = e.slice(0, t.length),
				l = e[t.length];
				else if (void 0 !== e[t.charAt(0)]) {
					for (n = 0; n < t.length; n++) a[t][n] = e[t.charAt(n)];
					l = e.a
				} else if (void 0 !== e[o[t][0]]) {
					var s = o[t];
					for (n = 0; n < t.length; n++) a[t][n] = e[s[n]];
					l = e.alpha
				}
				if (a.alpha = Math.max(0, Math.min(1, void 0 === l ? a.alpha: l)), "alpha" === t) return ! 1;
				var u;
				for (n = 0; n < t.length; n++) u = Math.max(0, Math.min(r[t][n], a[t][n])),
				a[t][n] = Math.round(u);
				for (var d in o) d !== t && (a[d] = i[t][d](a[t]));
				return ! 0
			},
			o.prototype.setSpace = function(t, e) {
				var n = e[0];
				return void 0 === n ? this.getValues(t) : ("number" == typeof n && (n = Array.prototype.slice.call(e)), this.setValues(t, n), this)
			},
			o.prototype.setChannel = function(t, e, n) {
				var i = this.values[t];
				return void 0 === n ? i[e] : n === i[e] ? this: (i[e] = n, this.setValues(t, i), this)
			},
			"undefined" != typeof window && (window.Color = o),
			e.exports = o
		},
		{
			2 : 2,
			5 : 5
		}],
		4 : [function(t, e, n) {
			function i(t) {
				var e, n, i, a = t[0] / 255,
				o = t[1] / 255,
				r = t[2] / 255,
				l = Math.min(a, o, r),
				s = Math.max(a, o, r),
				u = s - l;
				return s == l ? e = 0 : a == s ? e = (o - r) / u: o == s ? e = 2 + (r - a) / u: r == s && (e = 4 + (a - o) / u),
				(e = Math.min(60 * e, 360)) < 0 && (e += 360),
				i = (l + s) / 2,
				n = s == l ? 0 : i <= .5 ? u / (s + l) : u / (2 - s - l),
				[e, 100 * n, 100 * i]
			}
			function a(t) {
				var e, n, i, a = t[0],
				o = t[1],
				r = t[2],
				l = Math.min(a, o, r),
				s = Math.max(a, o, r),
				u = s - l;
				return n = 0 == s ? 0 : u / s * 1e3 / 10,
				s == l ? e = 0 : a == s ? e = (o - r) / u: o == s ? e = 2 + (r - a) / u: r == s && (e = 4 + (a - o) / u),
				(e = Math.min(60 * e, 360)) < 0 && (e += 360),
				i = s / 255 * 1e3 / 10,
				[e, n, i]
			}
			function o(t) {
				var e = t[0],
				n = t[1],
				a = t[2];
				return [i(t)[0], 100 * (1 / 255 * Math.min(e, Math.min(n, a))), 100 * (a = 1 - 1 / 255 * Math.max(e, Math.max(n, a)))]
			}
			function l(t) {
				var e, n, i, a, o = t[0] / 255,
				r = t[1] / 255,
				l = t[2] / 255;
				return a = Math.min(1 - o, 1 - r, 1 - l),
				e = (1 - o - a) / (1 - a) || 0,
				n = (1 - r - a) / (1 - a) || 0,
				i = (1 - l - a) / (1 - a) || 0,
				[100 * e, 100 * n, 100 * i, 100 * a]
			}
			function s(t) {
				return C[JSON.stringify(t)]
			}
			function u(t) {
				var e = t[0] / 255,
				n = t[1] / 255,
				i = t[2] / 255;
				return [100 * (.4124 * (e = e > .04045 ? Math.pow((e + .055) / 1.055, 2.4) : e / 12.92) + .3576 * (n = n > .04045 ? Math.pow((n + .055) / 1.055, 2.4) : n / 12.92) + .1805 * (i = i > .04045 ? Math.pow((i + .055) / 1.055, 2.4) : i / 12.92)), 100 * (.2126 * e + .7152 * n + .0722 * i), 100 * (.0193 * e + .1192 * n + .9505 * i)]
			}
			function d(t) {
				var e, n, i, a = u(t),
				o = a[0],
				r = a[1],
				l = a[2];
				return o /= 95.047,
				r /= 100,
				l /= 108.883,
				o = o > .008856 ? Math.pow(o, 1 / 3) : 7.787 * o + 16 / 116,
				r = r > .008856 ? Math.pow(r, 1 / 3) : 7.787 * r + 16 / 116,
				l = l > .008856 ? Math.pow(l, 1 / 3) : 7.787 * l + 16 / 116,
				e = 116 * r - 16,
				n = 500 * (o - r),
				i = 200 * (r - l),
				[e, n, i]
			}
			function c(t) {
				var e, n, i, a, o, r = t[0] / 360,
				l = t[1] / 100,
				s = t[2] / 100;
				if (0 == l) return o = 255 * s,
				[o, o, o];
				e = 2 * s - (n = s < .5 ? s * (1 + l) : s + l - s * l),
				a = [0, 0, 0];
				for (var u = 0; u < 3; u++)(i = r + 1 / 3 * -(u - 1)) < 0 && i++,
				i > 1 && i--,
				o = 6 * i < 1 ? e + 6 * (n - e) * i: 2 * i < 1 ? n: 3 * i < 2 ? e + (n - e) * (2 / 3 - i) * 6 : e,
				a[u] = 255 * o;
				return a
			}
			function h(t) {
				var e = t[0] / 60,
				n = t[1] / 100,
				i = t[2] / 100,
				a = Math.floor(e) % 6,
				o = e - Math.floor(e),
				r = 255 * i * (1 - n),
				l = 255 * i * (1 - n * o),
				s = 255 * i * (1 - n * (1 - o)),
				i = 255 * i;
				switch (a) {
				case 0:
					return [i, s, r];
				case 1:
					return [l, i, r];
				case 2:
					return [r, i, s];
				case 3:
					return [r, l, i];
				case 4:
					return [s, r, i];
				case 5:
					return [i, r, l]
				}
			}
			function f(t) {
				var e, n, i, a, o = t[0] / 360,
				l = t[1] / 100,
				s = t[2] / 100,
				u = l + s;
				switch (u > 1 && (l /= u, s /= u), e = Math.floor(6 * o), n = 1 - s, i = 6 * o - e, 0 != (1 & e) && (i = 1 - i), a = l + i * (n - l), e) {
				default:
				case 6:
				case 0:
					r = n,
					g = a,
					b = l;
					break;
				case 1:
					r = a,
					g = n,
					b = l;
					break;
				case 2:
					r = l,
					g = n,
					b = a;
					break;
				case 3:
					r = l,
					g = a,
					b = n;
					break;
				case 4:
					r = a,
					g = l,
					b = n;
					break;
				case 5:
					r = n,
					g = l,
					b = a
				}
				return [255 * r, 255 * g, 255 * b]
			}
			function p(t) {
				var e, n, i, a = t[0] / 100,
				o = t[1] / 100,
				r = t[2] / 100,
				l = t[3] / 100;
				return e = 1 - Math.min(1, a * (1 - l) + l),
				n = 1 - Math.min(1, o * (1 - l) + l),
				i = 1 - Math.min(1, r * (1 - l) + l),
				[255 * e, 255 * n, 255 * i]
			}
			function v(t) {
				var e, n, i, a = t[0] / 100,
				o = t[1] / 100,
				r = t[2] / 100;
				return e = 3.2406 * a + -1.5372 * o + -.4986 * r,
				n = -.9689 * a + 1.8758 * o + .0415 * r,
				i = .0557 * a + -.204 * o + 1.057 * r,
				e = e > .0031308 ? 1.055 * Math.pow(e, 1 / 2.4) - .055 : e *= 12.92,
				n = n > .0031308 ? 1.055 * Math.pow(n, 1 / 2.4) - .055 : n *= 12.92,
				i = i > .0031308 ? 1.055 * Math.pow(i, 1 / 2.4) - .055 : i *= 12.92,
				e = Math.min(Math.max(0, e), 1),
				n = Math.min(Math.max(0, n), 1),
				i = Math.min(Math.max(0, i), 1),
				[255 * e, 255 * n, 255 * i]
			}
			function m(t) {
				var e, n, i, a = t[0],
				o = t[1],
				r = t[2];
				return a /= 95.047,
				o /= 100,
				r /= 108.883,
				a = a > .008856 ? Math.pow(a, 1 / 3) : 7.787 * a + 16 / 116,
				o = o > .008856 ? Math.pow(o, 1 / 3) : 7.787 * o + 16 / 116,
				r = r > .008856 ? Math.pow(r, 1 / 3) : 7.787 * r + 16 / 116,
				e = 116 * o - 16,
				n = 500 * (a - o),
				i = 200 * (o - r),
				[e, n, i]
			}
			function x(t) {
				var e, n, i, a, o = t[0],
				r = t[1],
				l = t[2];
				return o <= 8 ? a = (n = 100 * o / 903.3) / 100 * 7.787 + 16 / 116 : (n = 100 * Math.pow((o + 16) / 116, 3), a = Math.pow(n / 100, 1 / 3)),
				e = e / 95.047 <= .008856 ? e = 95.047 * (r / 500 + a - 16 / 116) / 7.787 : 95.047 * Math.pow(r / 500 + a, 3),
				i = i / 108.883 <= .008859 ? i = 108.883 * (a - l / 200 - 16 / 116) / 7.787 : 108.883 * Math.pow(a - l / 200, 3),
				[e, n, i]
			}
			function y(t) {
				var e, n, i, a = t[0],
				o = t[1],
				r = t[2];
				return e = Math.atan2(r, o),
				(n = 360 * e / 2 / Math.PI) < 0 && (n += 360),
				i = Math.sqrt(o * o + r * r),
				[a, i, n]
			}
			function k(t) {
				return v(x(t))
			}
			function w(t) {
				var e, n, i, a = t[0],
				o = t[1];
				return i = t[2] / 360 * 2 * Math.PI,
				e = o * Math.cos(i),
				n = o * Math.sin(i),
				[a, e, n]
			}
			function M(t) {
				return S[t]
			}
			e.exports = {
				rgb2hsl: i,
				rgb2hsv: a,
				rgb2hwb: o,
				rgb2cmyk: l,
				rgb2keyword: s,
				rgb2xyz: u,
				rgb2lab: d,
				rgb2lch: function(t) {
					return y(d(t))
				},
				hsl2rgb: c,
				hsl2hsv: function(t) {
					var e, n, i = t[0],
					a = t[1] / 100,
					o = t[2] / 100;
					return 0 === o ? [0, 0, 0] : (o *= 2, a *= o <= 1 ? o: 2 - o, n = (o + a) / 2, e = 2 * a / (o + a), [i, 100 * e, 100 * n])
				},
				hsl2hwb: function(t) {
					return o(c(t))
				},
				hsl2cmyk: function(t) {
					return l(c(t))
				},
				hsl2keyword: function(t) {
					return s(c(t))
				},
				hsv2rgb: h,
				hsv2hsl: function(t) {
					var e, n, i = t[0],
					a = t[1] / 100,
					o = t[2] / 100;
					return n = (2 - a) * o,
					e = a * o,
					e /= n <= 1 ? n: 2 - n,
					e = e || 0,
					n /= 2,
					[i, 100 * e, 100 * n]
				},
				hsv2hwb: function(t) {
					return o(h(t))
				},
				hsv2cmyk: function(t) {
					return l(h(t))
				},
				hsv2keyword: function(t) {
					return s(h(t))
				},
				hwb2rgb: f,
				hwb2hsl: function(t) {
					return i(f(t))
				},
				hwb2hsv: function(t) {
					return a(f(t))
				},
				hwb2cmyk: function(t) {
					return l(f(t))
				},
				hwb2keyword: function(t) {
					return s(f(t))
				},
				cmyk2rgb: p,
				cmyk2hsl: function(t) {
					return i(p(t))
				},
				cmyk2hsv: function(t) {
					return a(p(t))
				},
				cmyk2hwb: function(t) {
					return o(p(t))
				},
				cmyk2keyword: function(t) {
					return s(p(t))
				},
				keyword2rgb: M,
				keyword2hsl: function(t) {
					return i(M(t))
				},
				keyword2hsv: function(t) {
					return a(M(t))
				},
				keyword2hwb: function(t) {
					return o(M(t))
				},
				keyword2cmyk: function(t) {
					return l(M(t))
				},
				keyword2lab: function(t) {
					return d(M(t))
				},
				keyword2xyz: function(t) {
					return u(M(t))
				},
				xyz2rgb: v,
				xyz2lab: m,
				xyz2lch: function(t) {
					return y(m(t))
				},
				lab2xyz: x,
				lab2rgb: k,
				lab2lch: y,
				lch2lab: w,
				lch2xyz: function(t) {
					return x(w(t))
				},
				lch2rgb: function(t) {
					return k(w(t))
				}
			};
			var S = {
				aliceblue: [240, 248, 255],
				antiquewhite: [250, 235, 215],
				aqua: [0, 255, 255],
				aquamarine: [127, 255, 212],
				azure: [240, 255, 255],
				beige: [245, 245, 220],
				bisque: [255, 228, 196],
				black: [0, 0, 0],
				blanchedalmond: [255, 235, 205],
				blue: [0, 0, 255],
				blueviolet: [138, 43, 226],
				brown: [165, 42, 42],
				burlywood: [222, 184, 135],
				cadetblue: [95, 158, 160],
				chartreuse: [127, 255, 0],
				chocolate: [210, 105, 30],
				coral: [255, 127, 80],
				cornflowerblue: [100, 149, 237],
				cornsilk: [255, 248, 220],
				crimson: [220, 20, 60],
				cyan: [0, 255, 255],
				darkblue: [0, 0, 139],
				darkcyan: [0, 139, 139],
				darkgoldenrod: [184, 134, 11],
				darkgray: [169, 169, 169],
				darkgreen: [0, 100, 0],
				darkgrey: [169, 169, 169],
				darkkhaki: [189, 183, 107],
				darkmagenta: [139, 0, 139],
				darkolivegreen: [85, 107, 47],
				darkorange: [255, 140, 0],
				darkorchid: [153, 50, 204],
				darkred: [139, 0, 0],
				darksalmon: [233, 150, 122],
				darkseagreen: [143, 188, 143],
				darkslateblue: [72, 61, 139],
				darkslategray: [47, 79, 79],
				darkslategrey: [47, 79, 79],
				darkturquoise: [0, 206, 209],
				darkviolet: [148, 0, 211],
				deeppink: [255, 20, 147],
				deepskyblue: [0, 191, 255],
				dimgray: [105, 105, 105],
				dimgrey: [105, 105, 105],
				dodgerblue: [30, 144, 255],
				firebrick: [178, 34, 34],
				floralwhite: [255, 250, 240],
				forestgreen: [34, 139, 34],
				fuchsia: [255, 0, 255],
				gainsboro: [220, 220, 220],
				ghostwhite: [248, 248, 255],
				gold: [255, 215, 0],
				goldenrod: [218, 165, 32],
				gray: [128, 128, 128],
				green: [0, 128, 0],
				greenyellow: [173, 255, 47],
				grey: [128, 128, 128],
				honeydew: [240, 255, 240],
				hotpink: [255, 105, 180],
				indianred: [205, 92, 92],
				indigo: [75, 0, 130],
				ivory: [255, 255, 240],
				khaki: [240, 230, 140],
				lavender: [230, 230, 250],
				lavenderblush: [255, 240, 245],
				lawngreen: [124, 252, 0],
				lemonchiffon: [255, 250, 205],
				lightblue: [173, 216, 230],
				lightcoral: [240, 128, 128],
				lightcyan: [224, 255, 255],
				lightgoldenrodyellow: [250, 250, 210],
				lightgray: [211, 211, 211],
				lightgreen: [144, 238, 144],
				lightgrey: [211, 211, 211],
				lightpink: [255, 182, 193],
				lightsalmon: [255, 160, 122],
				lightseagreen: [32, 178, 170],
				lightskyblue: [135, 206, 250],
				lightslategray: [119, 136, 153],
				lightslategrey: [119, 136, 153],
				lightsteelblue: [176, 196, 222],
				lightyellow: [255, 255, 224],
				lime: [0, 255, 0],
				limegreen: [50, 205, 50],
				linen: [250, 240, 230],
				magenta: [255, 0, 255],
				maroon: [128, 0, 0],
				mediumaquamarine: [102, 205, 170],
				mediumblue: [0, 0, 205],
				mediumorchid: [186, 85, 211],
				mediumpurple: [147, 112, 219],
				mediumseagreen: [60, 179, 113],
				mediumslateblue: [123, 104, 238],
				mediumspringgreen: [0, 250, 154],
				mediumturquoise: [72, 209, 204],
				mediumvioletred: [199, 21, 133],
				midnightblue: [25, 25, 112],
				mintcream: [245, 255, 250],
				mistyrose: [255, 228, 225],
				moccasin: [255, 228, 181],
				navajowhite: [255, 222, 173],
				navy: [0, 0, 128],
				oldlace: [253, 245, 230],
				olive: [128, 128, 0],
				olivedrab: [107, 142, 35],
				orange: [255, 165, 0],
				orangered: [255, 69, 0],
				orchid: [218, 112, 214],
				palegoldenrod: [238, 232, 170],
				palegreen: [152, 251, 152],
				paleturquoise: [175, 238, 238],
				palevioletred: [219, 112, 147],
				papayawhip: [255, 239, 213],
				peachpuff: [255, 218, 185],
				peru: [205, 133, 63],
				pink: [255, 192, 203],
				plum: [221, 160, 221],
				powderblue: [176, 224, 230],
				purple: [128, 0, 128],
				rebeccapurple: [102, 51, 153],
				red: [255, 0, 0],
				rosybrown: [188, 143, 143],
				royalblue: [65, 105, 225],
				saddlebrown: [139, 69, 19],
				salmon: [250, 128, 114],
				sandybrown: [244, 164, 96],
				seagreen: [46, 139, 87],
				seashell: [255, 245, 238],
				sienna: [160, 82, 45],
				silver: [192, 192, 192],
				skyblue: [135, 206, 235],
				slateblue: [106, 90, 205],
				slategray: [112, 128, 144],
				slategrey: [112, 128, 144],
				snow: [255, 250, 250],
				springgreen: [0, 255, 127],
				steelblue: [70, 130, 180],
				tan: [210, 180, 140],
				teal: [0, 128, 128],
				thistle: [216, 191, 216],
				tomato: [255, 99, 71],
				turquoise: [64, 224, 208],
				violet: [238, 130, 238],
				wheat: [245, 222, 179],
				white: [255, 255, 255],
				whitesmoke: [245, 245, 245],
				yellow: [255, 255, 0],
				yellowgreen: [154, 205, 50]
			},
			C = {};
			for (var _ in S) C[JSON.stringify(S[_])] = _
		},
		{}],
		5 : [function(t, e, n) {
			var i = t(4),
			a = function() {
				return new u
			};
			for (var o in i) {
				a[o + "Raw"] = function(t) {
					return function(e) {
						return "number" == typeof e && (e = Array.prototype.slice.call(arguments)),
						i[t](e)
					}
				} (o);
				var r = /(\w+)2(\w+)/.exec(o),
				l = r[1],
				s = r[2]; (a[l] = a[l] || {})[s] = a[o] = function(t) {
					return function(e) {
						"number" == typeof e && (e = Array.prototype.slice.call(arguments));
						var n = i[t](e);
						if ("string" == typeof n || void 0 === n) return n;
						for (var a = 0; a < n.length; a++) n[a] = Math.round(n[a]);
						return n
					}
				} (o)
			}
			var u = function() {
				this.convs = {}
			};
			u.prototype.routeSpace = function(t, e) {
				var n = e[0];
				return void 0 === n ? this.getValues(t) : ("number" == typeof n && (n = Array.prototype.slice.call(e)), this.setValues(t, n))
			},
			u.prototype.setValues = function(t, e) {
				return this.space = t,
				this.convs = {},
				this.convs[t] = e,
				this
			},
			u.prototype.getValues = function(t) {
				var e = this.convs[t];
				if (!e) {
					var n = this.space,
					i = this.convs[n];
					e = a[n][t](i),
					this.convs[t] = e
				}
				return e
			},
			["rgb", "hsl", "hsv", "cmyk", "keyword"].forEach(function(t) {
				u.prototype[t] = function(e) {
					return this.routeSpace(t, arguments)
				}
			}),
			e.exports = a
		},
		{
			4 : 4
		}],
		6 : [function(t, e, n) {
			"use strict";
			e.exports = {
				aliceblue: [240, 248, 255],
				antiquewhite: [250, 235, 215],
				aqua: [0, 255, 255],
				aquamarine: [127, 255, 212],
				azure: [240, 255, 255],
				beige: [245, 245, 220],
				bisque: [255, 228, 196],
				black: [0, 0, 0],
				blanchedalmond: [255, 235, 205],
				blue: [0, 0, 255],
				blueviolet: [138, 43, 226],
				brown: [165, 42, 42],
				burlywood: [222, 184, 135],
				cadetblue: [95, 158, 160],
				chartreuse: [127, 255, 0],
				chocolate: [210, 105, 30],
				coral: [255, 127, 80],
				cornflowerblue: [100, 149, 237],
				cornsilk: [255, 248, 220],
				crimson: [220, 20, 60],
				cyan: [0, 255, 255],
				darkblue: [0, 0, 139],
				darkcyan: [0, 139, 139],
				darkgoldenrod: [184, 134, 11],
				darkgray: [169, 169, 169],
				darkgreen: [0, 100, 0],
				darkgrey: [169, 169, 169],
				darkkhaki: [189, 183, 107],
				darkmagenta: [139, 0, 139],
				darkolivegreen: [85, 107, 47],
				darkorange: [255, 140, 0],
				darkorchid: [153, 50, 204],
				darkred: [139, 0, 0],
				darksalmon: [233, 150, 122],
				darkseagreen: [143, 188, 143],
				darkslateblue: [72, 61, 139],
				darkslategray: [47, 79, 79],
				darkslategrey: [47, 79, 79],
				darkturquoise: [0, 206, 209],
				darkviolet: [148, 0, 211],
				deeppink: [255, 20, 147],
				deepskyblue: [0, 191, 255],
				dimgray: [105, 105, 105],
				dimgrey: [105, 105, 105],
				dodgerblue: [30, 144, 255],
				firebrick: [178, 34, 34],
				floralwhite: [255, 250, 240],
				forestgreen: [34, 139, 34],
				fuchsia: [255, 0, 255],
				gainsboro: [220, 220, 220],
				ghostwhite: [248, 248, 255],
				gold: [255, 215, 0],
				goldenrod: [218, 165, 32],
				gray: [128, 128, 128],
				green: [0, 128, 0],
				greenyellow: [173, 255, 47],
				grey: [128, 128, 128],
				honeydew: [240, 255, 240],
				hotpink: [255, 105, 180],
				indianred: [205, 92, 92],
				indigo: [75, 0, 130],
				ivory: [255, 255, 240],
				khaki: [240, 230, 140],
				lavender: [230, 230, 250],
				lavenderblush: [255, 240, 245],
				lawngreen: [124, 252, 0],
				lemonchiffon: [255, 250, 205],
				lightblue: [173, 216, 230],
				lightcoral: [240, 128, 128],
				lightcyan: [224, 255, 255],
				lightgoldenrodyellow: [250, 250, 210],
				lightgray: [211, 211, 211],
				lightgreen: [144, 238, 144],
				lightgrey: [211, 211, 211],
				lightpink: [255, 182, 193],
				lightsalmon: [255, 160, 122],
				lightseagreen: [32, 178, 170],
				lightskyblue: [135, 206, 250],
				lightslategray: [119, 136, 153],
				lightslategrey: [119, 136, 153],
				lightsteelblue: [176, 196, 222],
				lightyellow: [255, 255, 224],
				lime: [0, 255, 0],
				limegreen: [50, 205, 50],
				linen: [250, 240, 230],
				magenta: [255, 0, 255],
				maroon: [128, 0, 0],
				mediumaquamarine: [102, 205, 170],
				mediumblue: [0, 0, 205],
				mediumorchid: [186, 85, 211],
				mediumpurple: [147, 112, 219],
				mediumseagreen: [60, 179, 113],
				mediumslateblue: [123, 104, 238],
				mediumspringgreen: [0, 250, 154],
				mediumturquoise: [72, 209, 204],
				mediumvioletred: [199, 21, 133],
				midnightblue: [25, 25, 112],
				mintcream: [245, 255, 250],
				mistyrose: [255, 228, 225],
				moccasin: [255, 228, 181],
				navajowhite: [255, 222, 173],
				navy: [0, 0, 128],
				oldlace: [253, 245, 230],
				olive: [128, 128, 0],
				olivedrab: [107, 142, 35],
				orange: [255, 165, 0],
				orangered: [255, 69, 0],
				orchid: [218, 112, 214],
				palegoldenrod: [238, 232, 170],
				palegreen: [152, 251, 152],
				paleturquoise: [175, 238, 238],
				palevioletred: [219, 112, 147],
				papayawhip: [255, 239, 213],
				peachpuff: [255, 218, 185],
				peru: [205, 133, 63],
				pink: [255, 192, 203],
				plum: [221, 160, 221],
				powderblue: [176, 224, 230],
				purple: [128, 0, 128],
				rebeccapurple: [102, 51, 153],
				red: [255, 0, 0],
				rosybrown: [188, 143, 143],
				royalblue: [65, 105, 225],
				saddlebrown: [139, 69, 19],
				salmon: [250, 128, 114],
				sandybrown: [244, 164, 96],
				seagreen: [46, 139, 87],
				seashell: [255, 245, 238],
				sienna: [160, 82, 45],
				silver: [192, 192, 192],
				skyblue: [135, 206, 235],
				slateblue: [106, 90, 205],
				slategray: [112, 128, 144],
				slategrey: [112, 128, 144],
				snow: [255, 250, 250],
				springgreen: [0, 255, 127],
				steelblue: [70, 130, 180],
				tan: [210, 180, 140],
				teal: [0, 128, 128],
				thistle: [216, 191, 216],
				tomato: [255, 99, 71],
				turquoise: [64, 224, 208],
				violet: [238, 130, 238],
				wheat: [245, 222, 179],
				white: [255, 255, 255],
				whitesmoke: [245, 245, 245],
				yellow: [255, 255, 0],
				yellowgreen: [154, 205, 50]
			}
		},
		{}],
		7 : [function(t, e, n) {
			var i = t(29)();
			i.helpers = t(45),
			t(27)(i),
			i.defaults = t(25),
			i.Element = t(26),
			i.elements = t(40),
			i.Interaction = t(28),
			i.platform = t(48),
			t(31)(i),
			t(22)(i),
			t(23)(i),
			t(24)(i),
			t(30)(i),
			t(33)(i),
			t(32)(i),
			t(35)(i),
			t(54)(i),
			t(52)(i),
			t(53)(i),
			t(55)(i),
			t(56)(i),
			t(57)(i),
			t(15)(i),
			t(16)(i),
			t(17)(i),
			t(18)(i),
			t(19)(i),
			t(20)(i),
			t(21)(i),
			t(8)(i),
			t(9)(i),
			t(10)(i),
			t(11)(i),
			t(12)(i),
			t(13)(i),
			t(14)(i);
			var a = [];
			a.push(t(49)(i), t(50)(i), t(51)(i)),
			i.plugins.register(a),
			i.platform.initialize(),
			e.exports = i,
			"undefined" != typeof window && (window.Chart = i),
			i.canvasHelpers = i.helpers.canvas
		},
		{
			10 : 10,
			11 : 11,
			12 : 12,
			13 : 13,
			14 : 14,
			15 : 15,
			16 : 16,
			17 : 17,
			18 : 18,
			19 : 19,
			20 : 20,
			21 : 21,
			22 : 22,
			23 : 23,
			24 : 24,
			25 : 25,
			26 : 26,
			27 : 27,
			28 : 28,
			29 : 29,
			30 : 30,
			31 : 31,
			32 : 32,
			33 : 33,
			35 : 35,
			40 : 40,
			45 : 45,
			48 : 48,
			49 : 49,
			50 : 50,
			51 : 51,
			52 : 52,
			53 : 53,
			54 : 54,
			55 : 55,
			56 : 56,
			57 : 57,
			8 : 8,
			9 : 9
		}],
		8 : [function(t, e, n) {
			"use strict";
			e.exports = function(t) {
				t.Bar = function(e, n) {
					return n.type = "bar",
					new t(e, n)
				}
			}
		},
		{}],
		9 : [function(t, e, n) {
			"use strict";
			e.exports = function(t) {
				t.Bubble = function(e, n) {
					return n.type = "bubble",
					new t(e, n)
				}
			}
		},
		{}],
		10 : [function(t, e, n) {
			"use strict";
			e.exports = function(t) {
				t.Doughnut = function(e, n) {
					return n.type = "doughnut",
					new t(e, n)
				}
			}
		},
		{}],
		11 : [function(t, e, n) {
			"use strict";
			e.exports = function(t) {
				t.Line = function(e, n) {
					return n.type = "line",
					new t(e, n)
				}
			}
		},
		{}],
		12 : [function(t, e, n) {
			"use strict";
			e.exports = function(t) {
				t.PolarArea = function(e, n) {
					return n.type = "polarArea",
					new t(e, n)
				}
			}
		},
		{}],
		13 : [function(t, e, n) {
			"use strict";
			e.exports = function(t) {
				t.Radar = function(e, n) {
					return n.type = "radar",
					new t(e, n)
				}
			}
		},
		{}],
		14 : [function(t, e, n) {
			"use strict";
			e.exports = function(t) {
				t.Scatter = function(e, n) {
					return n.type = "scatter",
					new t(e, n)
				}
			}
		},
		{}],
		15 : [function(t, e, n) {
			"use strict";
			var i = t(25),
			a = t(40),
			o = t(45);
			i._set("bar", {
				hover: {
					mode: "label"
				},
				scales: {
					xAxes: [{
						type: "category",
						categoryPercentage: .8,
						barPercentage: .9,
						offset: !0,
						gridLines: {
							offsetGridLines: !0
						}
					}],
					yAxes: [{
						type: "linear"
					}]
				}
			}),
			i._set("horizontalBar", {
				hover: {
					mode: "index",
					axis: "y"
				},
				scales: {
					xAxes: [{
						type: "linear",
						position: "bottom"
					}],
					yAxes: [{
						position: "left",
						type: "category",
						categoryPercentage: .8,
						barPercentage: .9,
						offset: !0,
						gridLines: {
							offsetGridLines: !0
						}
					}]
				},
				elements: {
					rectangle: {
						borderSkipped: "left"
					}
				},
				tooltips: {
					callbacks: {
						title: function(t, e) {
							var n = "";
							return t.length > 0 && (t[0].yLabel ? n = t[0].yLabel: e.labels.length > 0 && t[0].index < e.labels.length && (n = e.labels[t[0].index])),
							n
						},
						label: function(t, e) {
							return (e.datasets[t.datasetIndex].label || "") + ": " + t.xLabel
						}
					},
					mode: "index",
					axis: "y"
				}
			}),
			e.exports = function(t) {
				t.controllers.bar = t.DatasetController.extend({
					dataElementType: a.Rectangle,
					initialize: function() {
						var e, n = this;
						t.DatasetController.prototype.initialize.apply(n, arguments),
						(e = n.getMeta()).stack = n.getDataset().stack,
						e.bar = !0
					},
					update: function(t) {
						var e, n, i = this,
						a = i.getMeta().data;
						for (i._ruler = i.getRuler(), e = 0, n = a.length; e < n; ++e) i.updateElement(a[e], e, t)
					},
					updateElement: function(t, e, n) {
						var i = this,
						a = i.chart,
						r = i.getMeta(),
						l = i.getDataset(),
						s = t.custom || {},
						u = a.options.elements.rectangle;
						t._xScale = i.getScaleForId(r.xAxisID),
						t._yScale = i.getScaleForId(r.yAxisID),
						t._datasetIndex = i.index,
						t._index = e,
						t._model = {
							datasetLabel: l.label,
							label: a.data.labels[e],
							borderSkipped: s.borderSkipped ? s.borderSkipped: u.borderSkipped,
							backgroundColor: s.backgroundColor ? s.backgroundColor: o.valueAtIndexOrDefault(l.backgroundColor, e, u.backgroundColor),
							borderColor: s.borderColor ? s.borderColor: o.valueAtIndexOrDefault(l.borderColor, e, u.borderColor),
							borderWidth: s.borderWidth ? s.borderWidth: o.valueAtIndexOrDefault(l.borderWidth, e, u.borderWidth)
						},
						i.updateElementGeometry(t, e, n),
						t.pivot()
					},
					updateElementGeometry: function(t, e, n) {
						var i = this,
						a = t._model,
						o = i.getValueScale(),
						r = o.getBasePixel(),
						l = o.isHorizontal(