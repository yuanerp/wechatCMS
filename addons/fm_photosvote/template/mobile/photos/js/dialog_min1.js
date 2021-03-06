var iDialog = (function() {
	var c = '<header><dl><dd><label>{title}</label></dd><dd><span id="dialogWindow_close"></span></dd></dl></header>	<article class="dialogContent">{content}</article><p></p>';
	var b = {
		wrapper: null,
		cover: null,
		lastIndex: 1000,
		list: null
	};
	var a = function() {
			this.options = {
				id: "dialogWindow_",
				classList: "",
				type: "",
				wrapper: "",
				title: "",
				close: "",
				content: "",
				cover: true,
				btns: []
			};
		};
	a.prototype = {
		init: function() {
			if (b.list) {
				return this;
			} else {
				b.list = {};
			}
			var e = document.createElement("section");
			e.setAttribute("id", id = "dialoger"); /*e.setAttribute("ontouchmove","event.preventDefault();");*/
			var d = document.createElement("div");
			d.setAttribute("class", "dialogCover");
			e.appendChild(d);
			b.container = e;
			b.cover = d;
			document.body.insertBefore(b.container, document.body.childNodes[0]);
			return this;
		},
		open: function(f) {
			//window.scrollTo(0, 1);
			this.init();
			this.options = a.merge(this.options, f || {});  //返回调用open传进去的json;
			this.options.zIndex = b.lastIndex += 100;
			this.options.id = "dialogWindow_" + this.options.zIndex;
			b.list[this.options.id] = this;
			this.options.wrapper = document.createElement("div");
			this.options.wrapper.setAttribute("data-type", this.options.type);
			this.options.wrapper.setAttribute("id", this.options.id);
			this.options.wrapper.setAttribute("class", "dialogWindow on " + this.options.classList);
			this.options.wrapper.setAttribute("style", "z-index:" + this.options.zIndex);
			var scrollTop = document.documentElement.scrollTop || document.body.scrollTop; //李晓韬
			this.options.wrapper.style.top = scrollTop+150+"px";  //李晓韬
			this.options.wrapper.innerHTML = iTemplate.makeList(c, [this.options], function(j, i) {});
			b.container.insertBefore(this.options.wrapper, this.options.cover ? b.cover : null);
			if (this.options.btns.length) {
				var g = this;
				var h = document.createElement("div");
				h.setAttribute("class", "box");
				for (var e = 0, d; d = this.options.btns[e]; e++) {
					(function(i) {
						var j = document.createElement("a");
						j.setAttribute("href", "javascript:;");
						j.setAttribute("class", "dialogBtn");
						j.innerHTML = i.name;
						j.className = i.class?(j.className+" "+i.class):j.className;
						if (i.fn) {
							j.onclick = function() {
								i.fn.call(this, g);
							};
						}
						var k = document.createElement("div");
						k.appendChild(j);
						h.appendChild(k);
					})(d);
				}
				this.options.wrapper.querySelectorAll("p")[0].appendChild(h);
			}
			var q = this;
			document.getElementById('dialogWindow_close').onclick = function(){
				q.die();	
			}
			
			return this;
		},
		show: function() {
			var d = this.options.wrapper.classList;
			d.add("on");
			return this;
		},
		hide: function() {
			var d = this.options.wrapper.classList;
			d.remove("on");
			return this;
		},
		die: function() {
			var d = this;
			this.hide();
			setTimeout(function() {
				delete b.list[d.options.id];
				b.container.removeChild(d.options.wrapper);
			}, 300);
			return this;
		}
	};
	a.merge = function(f, e, g) {
		for (var d in e) {
			f[d] = e[d];
		}
		return f;
	};
	return a;
})();

var iTemplate = (function() {
	var a = function() {};
	a.prototype = {
		makeList: function(e, j, i) {
			var g = [],
				h = [],
				c = /{(.+?)}/g,
				d = {},
				f = 0;
			for (var b in j) {
				if (typeof i === "function") {
					d = i.call(this, b, j[b], f++) || {};
				}
				g.push(e.replace(c, function(k, l) {
					return (l in d) ? d[l] : (undefined === j[b][l] ? j[b] : j[b][l]);
				}));
			}
			return g.join("");
		}
	};
	return new a();
})();// JavaScript Document
