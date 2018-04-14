
function checkInput(){
	var name = document.getElementById('name');
	var post = document.getElementById('post');
	//验证用户名：不能超过10个字符（5个汉字），不能输入非法字符，不能为空
	nameValue = name.value.replace(/\s+/g,"");
	var SPECIAL_STR = "~!%^&*();\"?><[]{}\\|,:/=+—";
	var nameflag=true;
	for(i=0;i<nameValue.lenght;i++){
		if (SPECIAL_STR.indexOf(nameValue.charAt(i)) !=-1)
		nameflag=false;
	}
	if(nameValue==''){
		alert('请填写用户名称！');	
		return false;
	}
	if(nameValue.length>10){
		alert('用户名称最多10个字符（5个汉字）！');
		return false;
	}
	if(nameflag===false){
		alert('用户名称不能包含非法字符请更改！');
		return false;
	}
	//留言内容验证
	if(post.value==""){
		alert('请输入留言内容！');
		return false;			
	}
	if(post.value.length>400){
		alert('留言内容太长！');
		return false;			
	}
}
