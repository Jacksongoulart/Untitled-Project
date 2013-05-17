while(i<7){
	$('table #tabela-calendario').html({
		<tr class="warning">
        <td id="dia-hora-i" onmouseover="this.style.backgroundColor='#FFCC66'"onmouseout="this.style.backgroundColor='#fcf8e3'">22:00</td>
    	</tr>
	});
}


var celulaTabela = function(){
	id:null,
	data:null,
	hora:null,
	titulo:null,
	descricao:null,
	corpo: '<tr class="warning">
        <td id="dia-hora-i" onmouseover="this.style.backgroundColor="#FFCC66"onmouseout="this.style.backgroundColor="#fcf8e3">22:00</td>
    	</tr>',
   	event: onclick({
   		open.modal(this);
   	})
}