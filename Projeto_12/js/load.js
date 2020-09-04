$(function(){
    var atual = -1
    var maximo = $('.box-especialidade').length - 1
    var timer
    var animacaoDelay = 2

    execAnimacao()

    function execAnimacao(){
        $('.box-especialidade').hide()
        timer = setInterval(logicaAnimacao,animacaoDelay * 1000)

        function logicaAnimacao(){
            atual++
            if(atual > maximo){
                clearInterval(timer)
                return false
            }
            $('.box-especialidade').eq(atual).fadeIn()
        }
    }
})