const img = document.querySelector('#img-animal')
console.log(img)
img.addEventListener('click', () => {
    mostrarImagen()
})
const mostrarImagen = () => {
    console.log('click')
    const div = document.createElement('div')
    div.classList.add('mostrarImagen')
    const divImagen = document.createElement('div')
    const imgEtiqueta = document.createElement('img')
    divImagen.classList.add('mostrarImagen__div')
    imgEtiqueta.src = img.src
    divImagen.appendChild(imgEtiqueta)
    const enlaceCerrar = document.createElement('a')
    enlaceCerrar.classList.add('btn-cerrar')
    enlaceCerrar.textContent = 'X'
    div.appendChild(divImagen)
    div.appendChild(enlaceCerrar)
    enlaceCerrar.addEventListener('click', () => {
        div.remove()
    })
    document.querySelector('body').appendChild(div)
}