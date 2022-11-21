function addServico(id, nome, valor){
    bootstrap.Modal.getOrCreateInstance(document.getElementById('modalOS')).hide();
    const tcorpo = document.getElementById('itemOS');
    const linha = document.createElement('tr');
    var inputId= '<input name="id[]" value "'+id+'" readonly>';
    var inputQtde = '<td><input bane="qtde[]" value "'+id+'"></td>';
    linha.innerHTML= inputId+"</td><td>"+nome+"</td><td>150</td>"+inputQtde;
    tcorpo.appendChild(linha)
}