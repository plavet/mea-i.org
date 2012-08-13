(function(a){a(function(){var b={p:function(d){return a("#cws-wp-help-"+d)},loading:function(){c.loading.show()},loaded:function(){c.loading.hide()},bindH2Updates:function(){c.menu=a("#adminmenu a.current");c.menu.text(c.h2.edit.input.val());c.h2.edit.input.bind("keyup",function(){c.menu.text(a(this).val())})},sortable:function(){a(this).sortable({opacity:0.8,placeholder:"cws-wp-help-placeholder",axis:"y",cursor:"move",cursorAt:{left:0,top:0},distance:10,delay:50,handle:".sort-handle",items:"> li.cws-wp-help-local, > div#cws-wp-help-remote-docs-block",start:function(g,f){var d=a(f.item),i=a(".cws-wp-help-placeholder"),h;if(d.attr("id")==="cws-wp-help-remote-docs-block"){h=4}else{h=-2}i.height(d.height()+h)},update:function(f,d){b.loading();a.post(ajaxurl,{action:"cws_wp_help_reorder",nonce:c.ul.data("nonce"),order:a(this).sortable("toArray")},function(){b.loaded()})}});a(this).find("> li:not(.cws-wp-help-is-slurped) > ul > li:nth-child(2)").parent("ul").each(b.sortable)},sortableInit:function(){c.ul.find("> #cws-wp-help-remote-docs-block > li").unwrap();c.ul.find("> li.cws-wp-help-is-slurped:first").before('<div id="cws-wp-help-remote-docs-block"></div>');c.ul.find("> li.cws-wp-help-is-slurped").detach().appendTo("#cws-wp-help-remote-docs-block");c.ulSortable.each(b.sortable)},init:function(){if(a.browser.mozilla){c.h2.edit.input.css("top","-3px").css("margin-bottom","1px");c.h3.edit.input.css("margin-top","2px").css("margin-bottom","2.25px")}b.sortableInit();c.ul.find("li.page_item").each(function(){a(this).attr("id","page-"+a(this).attr("class").match(/page-item-([0-9]+)/)[1])});c.apiURL.click(function(){this.select()});c.saveButton.click(function(){b.saveSettings()});c.cancelLink.click(function(d){d.preventDefault();b.restoreSettings();b.hideSettings()});c.settingsButton.click(function(d){d.preventDefault();b.revealSettings(true)});c.h2.display.text.dblclick(function(){b.revealSettings();c.h2.edit.input.focus().select()});c.h3.display.text.dblclick(function(){b.revealSettings();c.h3.edit.input.focus().select()});c.returnMonitor.bind("keydown",function(d){if(13==d.which){a(this).blur();b.saveSettings()}});b.bindH2Updates();c.menuLocation.change(function(){var e=String(window.location);if(c.menuLocation.val().indexOf("submenu")==-1){e=e.replace("/index.php","/admin.php")}else{e=e.replace("/admin.php","/index.php")}var f=String(e)+"&wp-help-preview-menu-location="+c.menuLocation.val();var d=String(e).replace(/\/wp-admin\/.*$/,"/wp-admin/js/common.js");a("#adminmenu").load(f+" #adminmenu",function(){if(window.history.replaceState){window.history.replaceState(null,null,e)}a.getScript(d);b.bindH2Updates()})})},fadeOutIn:function(e,d){e.fadeOut(150,function(){d.fadeIn(150)})},hideShow:function(e,d){e.hide();d.show()},revealSettings:function(d){a([c.h2,c.h3]).each(function(){b.hideShow(this.display.wrap,this.edit.wrap)});c.actions.fadeTo(200,0.3);c.ul.fadeTo(200,0.3);b.fadeOutIn(c.doc,c.settings);if(d){(function(e){e.focus().select()})(c.h2.edit.input)}},restoreSettings:function(){a("input, select",c.settings).each(function(){var d=a(this);if(d.data("original-value")){d.val(d.data("original-value")).change()}})},saveSettings:function(){b.loading();b.clearError();a([c.h2,c.h3]).each(function(){this.display.text.text(this.edit.input.val())});a.post(ajaxurl,{action:"cws_wp_help_settings",nonce:a("#_cws_wp_help_nonce").val(),h2:c.h2.edit.input.val(),h3:c.h3.edit.input.val(),menu_location:c.menuLocation.val(),slurp_url:c.slurp.val()},function(d){d=a.parseJSON(d);c.slurp.val(d.slurp_url);if(d.error){b.error(d.error);c.slurp.focus()}else{b.hideSettings()}if(d.topics){b.p("nodocs").remove();c.ul.html(d.topics);b.sortableInit()}b.loaded()})},hideSettings:function(){a([c.h2,c.h3]).each(function(){b.hideShow(this.edit.wrap,this.display.wrap)});c.actions.fadeTo(200,1);c.ul.fadeTo(200,1);b.fadeOutIn(c.settings,c.doc)},clearError:function(){c.slurpError.html("").hide()},error:function(d){c.slurpError.html("<p>"+d+"</p>").fadeIn(150)}};var c={h2:{edit:{input:b.p("h2-label"),wrap:b.p("h2-label-wrap")},display:{text:a(".wrap h2:first"),wrap:a(".wrap h2:first")}},h3:{edit:{input:b.p("listing-label"),wrap:b.p("listing-labels")},display:{text:b.p("listing h3"),wrap:b.p("listing h3")}},settingsButton:b.p("settings-on"),menu:function(){return a("#adminmenu a.current")},doc:b.p("document"),ul:b.p("listing-wrap > ul"),ulSortable:b.p("listing-wrap > ul.can-sort"),actions:b.p("actions"),settings:b.p("settings"),listing:b.p("listing"),apiURL:b.p("api-url"),slurp:b.p("slurp-url"),slurpError:b.p("slurp-error"),saveButton:b.p("settings-save"),cancelLink:b.p("settings-cancel"),menuLocation:b.p("menu-location"),loading:b.p("loading"),returnMonitor:a('.wrap input[type="text"]')};b.init()})})(jQuery);