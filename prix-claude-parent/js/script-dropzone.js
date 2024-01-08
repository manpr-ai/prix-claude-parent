const dropzone = document.getElementById('dropzone');
const dropzoneMsg = document.querySelector('#dropzone p');
const input = document.querySelector('input');

dropzone.addEventListener('click', (e) => {
    input.click();
    input.onchange = (e) => {
        upload(e.target.files);
    };

});

dropzone.addEventListener('dragover', (e) => {
    e.preventDefault();
});

dropzone.addEventListener('drop', async (e) => {
    e.preventDefault();

   if (![...e.dataTransfer.items].every(item => item.kind === "file")) {
        dropzoneMsg.textContent = "Erreur: Vous devez sélectionner un fichier ou plusieurs fichiers";
        throw new Error("Vous devez sélectionner un fichier ou plusieurs fichiers");
    }

    // if(e.dataTransfer.items.length > 1) {
    //     dropzoneMsg.textContent = "Erreur: Vous devez selectionner un seul fichier";
    //     throw new Error("Vous devez sélectionner un seul fichier");
    // }

    const filesArray = [...e.dataTransfer.files];

    const areFiles = await Promise.all([...e.dataTransfer.files].map(file => {
        return new Promise((resolve) => {
            const fr = new FileReader();
            fr.onprogress = (e) => {
                if (e.loaded > 50) {
                    fr.abort();
                    resolve(true);
                }
            }
            fr.onload = () => {resolve(true);}
            fr.onerror = () => {resolve(false);}
            fr.readAsArrayBuffer(file);
        });
    }));

    

    if(!areFiles.every(item => item === true)) {
        dropzoneMsg.textContent = "Erreur: Fichier(s) non valides";
        throw new Error("Ce ou ces fichiers sont invalides");
    }
    upload(filesArray);
});

function upload(files) {

    const fd = new FormData();
    for (let i=0; i<files.length; i++) {
        fd.append(`file${i+1}`, files [i]);
    }

    dropzoneMsg.textContent = "Télachargement...";


    const req = new XMLHttpRequest();
    req.open('POST', 'http://httpbin.org/post');

    req.upload.addEventListener('progress', (e) => {
        const progress = e.loaded / e.total;
        dropzoneMsg.textContent = (progress * 100).toFixed()+"%";
        if (progress === 1) {
            dropzoneMsg.textContent = "Chargement...";
        }
    });

    req.addEventListener('load', (e) => {
        if (req.status === 200) {
            dropzoneMsg.textContent = "Téléchargement réussi...";
            console.log(JSON.parse(req.responseText));
        } else {
            dropzoneMsg.textContent = "Le téléchargement à échoué...";
            console.error("Bad response");
        }
    });
    req.addEventListener('error', (e) => {
        dropzoneMsg.textContent = "Le téléchargement à échoué...";
        console.error("Erreur réseau");

    });

    req.send(fd);
}