<script>
    export default {
        props:{
            'user' : Object,
        },
        data()
        {
            return{
                ProfileImage:null,
                phone: this.user.phone,
                password:'',
                password_confirmation:'',
            }
        },
        methods :{
            onImageChange(e){
                this.files = e.target.files || e.dataTransfer.files;
                this.createImage(this.files[0]);//passing the image to be viewed before uploading
            },
            createImage(file)
            {// preview image before uploading
                var image = new Image;
                var reader = new FileReader;

                reader.onload = (e) =>{
                    this.ProfileImage = e.target.result;
                };
                reader.readAsDataURL(file);
            },
            uploadImage()
            {
                this.$refs["image-ref"].click();
            },

        },
        computed :{
            IsValidPhone()
            {
                return (this.phone[0] == '0' && this.phone[1] == '1' && this.phone.length == 11 );
            },
            IsValidPassword()
            {
                return (this.password == this.password_confirmation);
            }
        },
    }
</script>
