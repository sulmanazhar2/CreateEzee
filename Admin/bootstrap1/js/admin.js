var productImagesFolder = 'Tool/AdminProjectsForUsers/Images/';

$(document).ready(function () {
    $(document).on('click', '.delete-design', function (e) {
        var name = e.target.id.split('-')[0];
        var txt = 'Tool/AdminProjectsForUsers/Images'
        var front = name.concat('-front.jpeg');
        var back = name.concat('-back.jpeg');
        var txt = name.concat('.txt');
        deleteFile('Tool/AdminProjectsForUsers/Images/' + front);
        deleteFile('Tool/AdminProjectsForUsers/Images/' + back);
        deleteFile('Tool/AdminProjectsForUsers/Project/' + txt);
        $('.card').remove();
        viewAllDesigns();
    });
    $(document).on('click', '.edit-design', function (e) {
        var name = e.target.id.split('-')[0];
        var txt = 'Tool/AdminProjectsForUsers/Images'
        var txt = name.concat('.txt');
        window.document.location = 'Tool/Editor.php' + '?jsonfile=' + 'Tool/AdminProjectsForUsers/Project/' + txt;
        
    });
    viewAllDesigns();



});

function viewAllDesigns() {
    
    $.ajax({
        url: productImagesFolder,
        success: function (data) {

            $(data).find("a").attr("href", function (i, val) {

                if (val.endsWith('front.jpeg')) {
                    $(".available-designs").append('<div class="card card-btn"><img class = "card-img-top" src = "' + productImagesFolder + val + '" alt = "Card image" loading="lazy"><div class = "card-body" ><div class = "btn-group" role = "group" aria - label = "Basic example"><button type = "button" class = "btn btn-secondary edit-design" id="' + val + '" > Edit </button> <button type = "button" class = "btn btn-secondary delete-design" id="' + val + '"> Delete </button> </div></div> </div>');
                }
            });
        }
    });
}




function deleteFile(file_path) {
    $.ajax({
        url: 'design-delete.php',
        data: {
            'file': file_path
        },

        success: function (response) {
            if (response.status === true) {
                alert('File Deleted!');
            } else console.log(response);
        }
    });

}
