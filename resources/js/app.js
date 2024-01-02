import Dropzone from "dropzone"

Dropzone.autoDiscover = false

const dropzone = new Dropzone('#dropzone', {
    acceptedFiles: '.png,.jpg,.jpeg,.gif',
    addRemoveLinks: true,
    maxFiles: 1,
    uploadMultiple: false,
    init: function () {
        if(document.querySelector('[name="image"]').value.trim()) {
            const postedImage = {}
            postedImage.size = 1024
            postedImage.name = document.querySelector('[name="image"]').value.trim()

            this.options.addedfile.call(this, postedImage)
            this.options.thumbnail.call(this, postedImage, `/uploads/${postedImage.name}`)

            postedImage.previewElement.classList.add('dz-success', 'dz-complete')
        }
    }
})

dropzone.on('success', (file, response) => {
    document.querySelector('[name="image"]').value = response.image
})

dropzone.on('removedfile', () => {
    document.querySelector('[name="image"]').value = ''
})
