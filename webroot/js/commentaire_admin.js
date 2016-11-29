document.getElementById('list_select').onchange = function(){
	var url = '?module=commentaires&action=admin&user='+document.getElementById('list_select').value;
	window.location = url;
}