showData(
{
	"title": "Client Contact Mashup"
	,"header": "Welcome here"
	, "intro": "This text appears at the top and <b>can include html</b>"
	, "instructions": "This text appears right below the <i>intro</i>"
	, "icon" : "http://odwwpsn1.ihe.ibm.com/wps/themes/html/IBM/images/palette/portlets/my_news.gif"
	, "height" : "300"

	,"body":	"\
<div id='searchcontrol'/>\
"

	,"json": {
		"initialize": function() {

			document.writeln("<script src='http://www.google.com/jsapi' type='text/javascript'></script>");
    			document.writeln("<script type='text/javascript'>");
		    	document.writeln("google.load('search', '1');");
			document.writeln("function OnLoad() {");
			document.writeln("var searchControl = new google.search.SearchControl();");
			document.writeln("searchControl.addSearcher(new google.search.WebSearch());");
			document.writeln("searchControl.draw(document.getElementById('searchcontrol'));");
			document.writeln("}");
			document.writeln("google.setOnLoadCallback(OnLoad, true);");
			document.writeln("</script>");
			document.writeln("<div id='searchcontrol'/>");
			document.writeln("Client Contact Mashup");
		}
	}
}
);
