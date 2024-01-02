import Dropzone from "dropzone"

Dropzone.autoDiscover = false

const dropzone = new Dropzone('#dropzone', {
    acceptedFiles: '.png,.jpg,.jpeg,.gif',
    addRemoveLinks: true,
    maxFiles: 1,
    uploadMultiple: false,
})
