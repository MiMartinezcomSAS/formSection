
var contador=0;
	var borrar=document.getElementById("form");
	var borrar1=document.getElementById("form1");
	var borrar2=document.getElementById("form2");
	var borrar3=document.getElementById("form3");
	var borrar4=document.getElementById("form4");
	var borrar5=document.getElementById("form5");
	var borrar6=document.getElementById("form6");
	var borrar7=document.getElementById("form7");
	var borrar8=document.getElementById("form8");
	var borrar9=document.getElementById("form9");
	var borrar10=document.getElementById("form10");
	var borrar11=document.getElementById("form11");
	var borrar12=document.getElementById("form12");
	var borrar13=document.getElementById("form13");
	var borrar14=document.getElementById("form14");
	var borrar15=document.getElementById("form15");
	var borrar16=document.getElementById("form16");
	var borrar17=document.getElementById("form17");
	var borrar18=document.getElementById("form18");
	var borrar19=document.getElementById("form19");
	var borrar20=document.getElementById("form20");
	var borrar21=document.getElementById("form21");

function empezar(){
	borrar21.classList.add('hiden');
	borrar20.classList.remove('hiden');
	

	if(contador===0){
		borrar.classList.remove('hiden');
	}

	if(contador===1){
		borrar1.classList.remove('hiden');
		borrar.classList.add('hiden');
	}
	if(contador===2){
		borrar2.classList.remove('hiden');
		borrar1.classList.add('hiden');
	}
	if(contador===3){
		borrar3.classList.remove('hiden');
		borrar2.classList.add('hiden');
	}
	if(contador===4){
		borrar4.classList.remove('hiden');
		borrar3.classList.add('hiden');
	}
	if(contador===5){
		borrar5.classList.remove('hiden');
		borrar4.classList.add('hiden');
	}
	if(contador===6){
		borrar6.classList.remove('hiden');
		borrar5.classList.add('hiden');
	}
	if(contador===7){
		borrar8.classList.remove('hiden');
		borrar7.classList.remove('hiden');
		borrar6.classList.add('hiden');
	}
	if(contador===8){
		borrar10.classList.remove('hiden');
		borrar9.classList.remove('hiden');
		borrar8.classList.add('hiden');
		borrar7.classList.add('hiden');
	}
	if(contador===9){
		borrar12.classList.remove('hiden');
		borrar11.classList.remove('hiden');
		borrar10.classList.add('hiden');
		borrar9.classList.add('hiden');
	}
	if(contador===10){
		borrar14.classList.remove('hiden');
		borrar13.classList.remove('hiden');
		borrar12.classList.add('hiden');
		borrar11.classList.add('hiden');
	}
	if(contador===11){
		
		borrar16.classList.remove('hiden');
		borrar15.classList.remove('hiden');
		borrar14.classList.add('hiden');
		borrar13.classList.add('hiden');
	}
	if(contador===12){
	
		borrar18.classList.remove('hiden');
		borrar17.classList.remove('hiden');
		borrar16.classList.add('hiden');
		borrar15.classList.add('hiden');
	}

	if(contador===13){
		borrar19.classList.remove('hiden');
		borrar20.classList.add('hiden');
		borrar18.classList.add('hiden');
		borrar17.classList.add('hiden');
	}
	
	contador++;
	}


