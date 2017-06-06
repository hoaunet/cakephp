﻿CKEDITOR.dialog.add("pbckcodeDialog", function (b) {
	var f = ["1", "2", "4", "8"],
		g, e = new PBSyntaxHighlighter(b.settings.highlighter),
		c, d, h;
	return {
		title    : b.lang.pbckcode.title,
		minWidth : 600,
		minHeight: 400,
		contents : [
			{
				id      : "editor",
				label   : b.lang.pbckcode.editor,
				elements: [
					{
						type    : "hbox",
						children: [
							{
								type     : "select",
								id       : "code-select",
								className: "cke_pbckcode_form",
								label    : b.lang.pbckcode.mode,
								items    : b.settings.modes,
								"default": b.settings.modes[0][1],
								setup    : function (a) {
									a && (a = a.getAscendant("pre", !0), this.setValue(a.getAttribute("data-pbcklang")))
								},
								commit   : function (a) {
									a && (a = a.getAscendant("pre", !0), a.setAttribute("data-pbcklang", this.getValue()))
								},
								onChange : function () {
									d.setMode("ace/mode/" + this.getValue())
								}
							},
							{
								type     : "select",
								id       : "code-tabsize-select",
								className: "cke_pbckcode_form",
								label    : "Tab size",
								items    : f,
								"default": f[2],
								setup    : function (a) {
									a && (a = a.getAscendant("pre", !0), this.setValue(a.getAttribute("data-pbcktabsize")))
								},
								commit   : function (a) {
									a && (a = a.getAscendant("pre", !0), a.setAttribute("data-pbcktabsize", this.getValue()))
								},
								onChange : function (a) {
									a && (h.convertIndentation(d,
										" ", this.getValue()), d.setTabSize(this.getValue()))
								}
							}
						]
					},
					{
						type     : "html",
						html     : "<div></div>",
						id       : "code-textarea",
						className: "cke_pbckcode_ace",
						style    : "position: absolute; top: 80px; left: 10px; right: 10px; bottom: 50px;",
						setup    : function (a) {
							a = a.getHtml();
							a = a.replace(RegExp("<br/>", "g"), "\n").replace(RegExp("<br>", "g"), "\n").replace(RegExp("&lt;", "g"), "<").replace(RegExp("&gt;", "g"), ">").replace(RegExp("&amp;", "g"), "&").replace(RegExp("&nbsp;", "g"), " ");
							c.setValue(a)
						},
						commit   : function (a) {
							a.setText(c.getValue())
						}
					}
				]
			}
		],
		onLoad   : function () {
			g = this;
			c = ace.edit(g.getContentElement("editor", "code-textarea").getElement().getId());
			b.aceEditor = c;
			c.setTheme("ace/theme/" + b.settings.theme);
			c.setHighlightActiveLine(!0);
			d = c.getSession();
			d.setMode("ace/mode/" + b.settings.modes[0][1]);
			d.setTabSize(b.settings.tab_size);
			d.setUseSoftTabs(!0);
			h = ace.require("ace/ext/whitespace")
		},
		onShow   : function () {
			var a = b.getSelection().getStartElement();
			a && (a = a.getAscendant("pre", !0));
			!a || "pre" !== a.getName() ? (a = new CKEDITOR.dom.element("pre"), "pre" !==
				e.getTag() && a.append(new CKEDITOR.dom.element("code")), this.insertMode = !0) : ("pre" !== e.getTag() && (a = a.getChild(0)), this.insertMode = !1);
			this.element = a;
			c.focus();
			c.setValue("");
			this.insertMode || this.setupContent(this.element)
		},
		onOk     : function () {
			var a, c;
			a = c = this.element;
			this.insertMode ? "pre" !== e.getTag() && (c = this.element.getChild(0)) : a = c.getAscendant("pre", !0);
			this.commitContent(c);
			e.setCls(a.getAttribute("data-pbcklang") + " " + b.settings.cls);
			c.setAttribute("class", e.getCls());
			this.insertMode && b.insertElement(a)
		}
	}
});
CKEDITOR.dialog.on("resize", function (b) {
	b = b.editor.aceEditor;
	void 0 !== b && b.resize()
});
