function mostrarDados(){
    $.ajax({
        url: 'http://localhost/testexcapital/select.php',
        method: 'GET',
        dataType: 'json',
    }).done(function(result){
        console.log(result);
    });
}

$("#form").submit(function(e){
    e.preventDefault();
   
    let cpf = $("#cpf").val();
    let cpf_formatado = cpf.replace(/^(\d{3})\D*(\d{3})\D*(\d{3})\D*(\d{2})$/g,'$1.$2.$3-$4');
    let valor = $("#valor").val().replace(",",".");
    let valor_com_juros = (valor * (1 + (5/100)) ** 6).toFixed(2);

    $.ajax({
        url: 'http://localhost/testexcapital/inserir.php',
        method: 'POST',
        data: {
            nome: $("#nome").val(),
            email: $("#email").val(),
            cpf: cpf_formatado,
            valor: valor,
            valor_com_juros: valor_com_juros
        },
        dataType: 'json'
    }).done(function(result){
        mostrarDados();
        console.log(result);
    })
});
mostrarDados();


