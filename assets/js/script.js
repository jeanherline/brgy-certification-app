function captureImage() {
    const video = document.createElement('video');
    const canvas = document.getElementById('canvas');
    const context = canvas.getContext('2d');

    navigator.mediaDevices.getUserMedia({ video: { facingMode: 'environment' }, audio: false })
        .then(stream => {
            video.srcObject = stream;
            video.play();

            video.addEventListener('canplay', () => {
                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;
                context.drawImage(video, 0, 0);
                const imgData = canvas.toDataURL('image/png');
                // You can now use imgData as the captured image's source or save it.
                video.pause();
                stream.getTracks()[0].stop();
            });
        })
        .catch(error => {
            console.error('Error accessing camera:', error);
        });
}