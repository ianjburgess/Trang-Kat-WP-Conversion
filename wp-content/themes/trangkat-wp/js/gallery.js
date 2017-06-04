/**
 * Created by Ian on 21/07/2016.
 */

// Gallery
$(function(){
    var $gallery = $('.gallery a').simpleLightbox();

    $gallery.on('show.simplelightbox', function(){
        console.log('Requested for showing');
    })
        .on('error.simplelightbox', function(e){
            console.log('No image found, go to the next/prev');
            console.log(e);
        });
});
