function addServico(id, nome, valor){
    bootstrap.Modal.getOrCreateInstance(document.getElementById('modalOS')).hide();
    const tcorpo = document.getElementById('itemOS');
    const linha = document.createElement('tr');
    var inputId= '<input name="id[]" value ="'+id+'" readonly size="5" class="form-control-plaintext"></td>';
    var inputNome= '<td>'+nome+'</td>'
    var inputValor= '<input name="valorServ[]" value ="'+valor+'" size="5"></td>';
    var inputQtde = '<td><input bane="qtde[]" value ="'+qtd+'"></td>';
    linha.innerHTML= inputId+inputNome+inputValor+inputQtde;
    tcorpo.appendChild(linha)
}