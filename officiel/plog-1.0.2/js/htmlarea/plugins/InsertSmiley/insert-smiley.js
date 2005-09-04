function InsertSmiley(editor) {
	this.editor = editor;
	var cfg = editor.config;
	var tt = InsertSmiley.I18N;
	var bl = InsertSmiley.btnList;
	var self = this;

	var toolbar = [];
	for (var i in bl) {
		var btn = bl[i];
		if (!btn) {
			toolbar.push("separator");
		} else {
			var id = "IS-" + btn[0];
			cfg.registerButton(id, tt[id], editor.imgURL(btn[0] + ".gif", "InsertSmiley"), false,
			function(editor, id) {
			   self.buttonPress(editor, id);
			}, btn[1]);
			toolbar.push(id);
		}
	}

	for (var i in toolbar) {
		cfg.toolbar[0].push("separator");
		cfg.toolbar[0].push(toolbar[i]);
	}
};

InsertSmiley._pluginInfo = {
	name          : "InsertSmiley",
	version       : "v1.1",
	developer     : "Bernhard Pfeifer aka novocaine",
	developer_url : "http://www.novocaine.de/",
	c_owner       : "Bernhard Pfeifer",
	sponsor       : "none",
	sponsor_url   : "none",
	license       : "HTMLArea3 XTD"
};

InsertSmiley.btnList = [
	//null, // separator
	["insert-smiley"]
	];

InsertSmiley.prototype.buttonPress = function(editor, id) {
	this.editor = editor;
	InsertSmiley.editor = editor;
	InsertSmiley.init = true;
	var sel = editor._getSelection();
	var range = editor._createRange(sel);
	editor._popupDialog("plugin://InsertSmiley/insert_smiley", function(param) {
		if(!param) {
			return false;
		}
		editor.focusEditor();
		editor.insertHTML('<img src="'+param.f_url+'" alt="'+param.f_alt+'" width="'+param.f_width+'" height="'+param.f_height+'" border="0" />');
	}, null);
};