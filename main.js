function changeImage(image){	
	if (image.src && image.getAttribute('src-alt')){
		const alt = image.src;
		image.src = image.getAttribute('src-alt');
    	image.setAttribute('src-alt', alt);
    }
}