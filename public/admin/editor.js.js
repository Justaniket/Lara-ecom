// Docs: https://ckeditor.com/docs/ckeditor5/latest/builds/guides/integration/frameworks/vuejs.html

Vue.use( CKEditor );

const app = new Vue( {
    el: '#app',
    data: {
        editor: ClassicEditor,
        editorData: '<h1>Title</h1><p>Content of the editor.</p>',
        editorConfig: {
            // The configuration of the editor.
        }
    }
} );