window.onload = function() {
    // Lấy danh sách button [cite: 787, 788]
    var button = document.getElementsByTagName('input');
    
    // Lặp qua từng button [cite: 790]
    for (var i = 0; i < button.length; i++) {
        // Gán sự kiện click [cite: 792]
        button[i].addEventListener("click", function(){ 
            // Lấy thẻ tr [cite: 794]
            var parent = this.parentElement.parentElement; 
            
            // Và thực hiện xóa 
            parent.remove(); 
        });
    }
};