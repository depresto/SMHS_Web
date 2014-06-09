function chk_data(){
if(add_form.title.value==""){
		alert("「主題名稱」欄中不可為空白!");
		add_form.title.focus();
}else if(add_form.content.value==""){
		alert("「內容」欄中不可為空白!");
		add_form.content.focus();
}else {
		return true;
}
return false;
}
