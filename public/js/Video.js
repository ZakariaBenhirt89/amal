class Video extends HTMLElement {
    previewSrc
    constructor() {
        super();
        const video = document.createElement('video')
        const style  = document.createElement('link')
        style.setAttribute('rel' , 'stylesheet')
        style.setAttribute('href' , 'https://unpkg.com/cloudinary-video-player@1.5.9/dist/cld-video-player.min.css')
        const id = this.hasAttribute('id') ? this.getAttribute('id') : 'doc-player'
        video.setAttribute('id' , id)
        video.setAttribute('controls' , 'true')
        video.setAttribute('class' , 'cld-video-player cld-fluid')

        this.appendChild(style )
        this.appendChild(video)


    }
    connectedCallback(){
        let result = this.previewSrc
        console.log('this the app ')
        const id = this.hasAttribute('id') ? this.getAttribute('id') : 'doc-player'
        console.dir(this.childNodes)
        const videoElement = this.childNodes[2]
        var cld = cloudinary.Cloudinary.new({ cloud_name: 'demo' });
        this.previewSrc = this.hasAttribute('src') ? this.getAttribute('src') : ''
        var demoplayer = cld.videoPlayer(videoElement.id , {
            "fluid": true,
            "controls": true,
            "colors": {
                "base": "#2e6c36"
            },
            "logoOnclickUrl": "https://www.amaltadrib.com",
            "logoImageUrl": "https://res.cloudinary.com/daog54j96/image/upload/v1636460850/logo_yedftx.svg"
        }).width(600);
        demoplayer.source(this.previewSrc)
    }

}
customElements.define('video-amal', Video);

