(function(){

const tagsInput = document.querySelector('#tags_input');

if(tagsInput){
    const tagDiv = document.querySelector('#tags');
    const tagsInputHidden = document.querySelector('[name="tags"]');
    let tags = [];

    //recuperara el input oculto
    
    if(tagsInputHidden.value !== ''){
        tags = tagsInputHidden.value.split(',');
        mostrarTags();
    }
    
    // ecuchar los cambios del input

    tagsInput.addEventListener('keypress', guardarTag);

    function guardarTag(e) {

        
         if(e.keyCode === 44){

    
            
           
            if (e.target.value.trim() === '' || e.target.value.length <=3) {
                return
            }
            e.preventDefault();

            tags = [...tags, e.target.value.trim()];

            tagsInput.value='';
            
            mostrarTags();
         }
    }

        function mostrarTags() {
            tagDiv.textContent = '';
            tags.forEach(tag => {
                const etiqueta = document.createElement('LI');
                etiqueta.classList.add('formulario__tag');
                etiqueta.textContent = tag;
                etiqueta.ondblclick = eliminarTag;
                tagDiv.appendChild(etiqueta);
                });

                actualizarInputHidden();
        }

        function eliminarTag(e){
            e.target.remove(e);
            tags = tags.filter(tag => tag !== e.target.textContent);
            actualizarInputHidden();
        }
        function actualizarInputHidden() {

            tagsInputHidden.value = tags.toString();
            
        }
}

})();