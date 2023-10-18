$(document).ready(function () {

    $("#phone_number").on("input", function(){ // input event!
        let n = destroyMask(this.value);
        this.setAttribute("data-normalized", n); // saved as attribute instead
        this.value = createMask(n);
    })

    function createMask(string){
        return string.replace(/(\d{3})(\d{3})(\d{2})(\d{2})/,"+7($1)-$2-$3-$4");
    }

    function destroyMask(string){
        return string.replace(/\D/g,'').substring(0, 10); // 7 instead of 8!
    }


});
