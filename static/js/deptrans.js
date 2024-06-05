function openNav() {
    document.getElementById("mySidenav").style.width = "205px";
    document.querySelector(".logo").style.boxShadow = "none";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.querySelector(".logo").style.boxShadow = "rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset";
  }

  document.getElementById('cpf').addEventListener('input', function(e) {
    var value = e.target.value;
    var cpfPattern = value.replace(/\D/g, '') 
              .replace(/(\d{3})(\d)/, '$1.$2')
              .replace(/(\d{3})(\d)/, '$1.$2')
              .replace(/(\d{3})(\d)/, '$1-$2') 
              .replace(/(-\d{2})\d+?$/, '$1'); 
    e.target.value = cpfPattern;
  });

  document.getElementById('banco').addEventListener('input', function(e) {
    var value = e.target.value;
    var cpfPattern = value.replace(/\D/g, '') 
              .replace(/(\d{3})(\d)/, '$1-$2')
              .replace(/(-\d{1})\d+?$/, '$1'); 
    e.target.value = cpfPattern;
  });

  document.getElementById('agencia').addEventListener('input', function(e) {
    var value = e.target.value;
    var cpfPattern = value.replace(/\D/g, '')
              .replace(/(\d{4})(\d)/, '$1-$2')
              .replace(/(-\d{1})\d+?$/, '$1'); 
    e.target.value = cpfPattern;
  });

  document.getElementById('conta').addEventListener('input', function(e) {
    var value = e.target.value;
    var cpfPattern = value.replace(/\D/g, '')
              .replace(/(\d{4})(\d)/, '$1-$2')
              .replace(/(-\d{2})\d+?$/, '$1'); 
    e.target.value = cpfPattern;
  });

  function mascara(valor) {
    var valorAlterado = valor.value;
    valorAlterado = valorAlterado.replace(/\D/g, ""); 
    valorAlterado = valorAlterado.replace(/(\d+)(\d{2})$/, "$1,$2"); 
    valorAlterado = valorAlterado.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1."); 
    valorAlterado = "R$ " + valorAlterado;
    valor.value = valorAlterado;
  }