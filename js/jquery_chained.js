// Create new HTML5 elements ===================================================
// -----------------------------------------------------------------------------
// This script should load before any others. We want the new elements to be
// parsed before pretty much anything happens.
// Plus, IE does not behave otherwise. The cost of being progressive...
// -----------------------------------------------------------------------------

/*
 * Chained 0.9.8 - MIT license - Copyright 2010-2013 Mika Tuupola
 */
!function(a,b){"use strict";a.fn.chained=function(c,d){return a.extend({},a.fn.chained.defaults,d),this.each(function(){var d=this,e=a(d).clone();a(c).each(function(){a(this).bind("change",function(){a(d).html(e.html());var f="";a(c).each(function(){a(":selected",this).val()&&(f+="\\"+a(":selected",this).val())}),f=f.substr(1),b.Zepto&&(f=f.replace("\\","\\\\"));var g;g=a.isArray(c)?a(c[0]).first():a(c).first();var h=a(":selected",g).val();a("option",d).each(function(){a(this).hasClass(f)||a(this).hasClass(h)||""===a(this).val()||a(this).remove()}),1===a("option",d).size()&&""===a(d).val()?a(d).attr("disabled","disabled"):a(d).removeAttr("disabled"),a(d).trigger("change")}),a("option:selected",this).length||a("option",this).first().attr("selected","selected"),a(this).trigger("change")})})},a.fn.chainedTo=a.fn.chained,a.fn.chained.defaults={}}(window.jQuery||window.Zepto,window,document);
$("#series").remoteChained("#mark", "/api/series.json");
$("#model").remoteChained("#series", "/api/model.json");
$("#engine").remoteChained("#series, #model", "/api/engine.json");