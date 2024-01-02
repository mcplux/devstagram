import Dropzone from "dropzone"

Dropzone.autoDiscover = false

const dropzone = new Dropzone('#dropzone', {
    acceptedFiles: '.png,.jpg,.jpeg,.gif',
    addRemoveLinks: true,
    maxFiles: 1,
    uploadMultiple: false,
})

dropzone.on('sending', (file, xhr, formData) => {
    console.log(formData)
})

dropzone.on('success', (file, response) => {
    console.log(response)
})

dropzone.on('error', (file, message) => {
    console.log(message)
})

dropzone.on('removedfile', () => {
    console.log('Removed')
})
