    </div>
</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Hidrobombeo Ingenieros S.A.C. 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Estas seguro papu?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="../database/logout.php">Cerrar sesión</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/popper/popper.min.js"></script>
<!-- Page level custom scripts -->
<script src="js/datatable.js"></script>

<script>
    CKEDITOR.replace( 'descripcionNoticia', {
        filebrowserUploadMethod: "form",
        filebrowserUploadUrl: "upload.php",
		toolbar: [
			{ name: 'clipboard', items: [ 'Undo', 'Redo' ] },
			{ name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
			{ name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'RemoveFormat', 'CopyFormatting' ] },
			{ name: 'colors', items: [ 'TextColor', 'BGColor' ] },
			{ name: 'align', items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
			{ name: 'links', items: [ 'Link', 'Unlink' ] },
			{ name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
			{ name: 'insert', items: [ 'Image', 'Table' ] },
			{ name: 'tools', items: [ 'Maximize' ] },
			{ name: 'editing', items: [ 'Scayt' ] }
		],

		// Since we define all configuration options here, let's instruct CKEditor to not load config.js which it does by default.
		// One HTTP request less will result in a faster startup time.
		// For more information check https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-customConfig
		customConfig: '',

		// Sometimes applications that convert HTML to PDF prefer setting image width through attributes instead of CSS styles.
		// For more information check:
		//  - About Advanced Content Filter: https://ckeditor.com/docs/ckeditor4/latest/guide/dev_advanced_content_filter.html
		//  - About Disallowed Content: https://ckeditor.com/docs/ckeditor4/latest/guide/dev_disallowed_content.html
		//  - About Allowed Content: https://ckeditor.com/docs/ckeditor4/latest/guide/dev_allowed_content_rules.html
		disallowedContent: 'img{width,height,float}',
		extraAllowedContent: 'img[width,height,align]',

		// Enabling extra plugins, available in the full-all preset: https://ckeditor.com/cke4/presets-all
		extraPlugins: 'tableresize,uploadimage,uploadfile',

		/*********************** File management support ***********************/
		// In order to turn on support for file uploads, CKEditor has to be configured to use some server side
		// solution with file upload/management capabilities, like for example CKFinder.
		// For more information see https://ckeditor.com/docs/ckeditor4/latest/guide/dev_ckfinder_integration.html

		// Uncomment and correct these lines after you setup your local CKFinder instance.
		// filebrowserBrowseUrl: 'http://example.com/ckfinder/ckfinder.html',
		// filebrowserUploadUrl: 'http://example.com/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		/*********************** File management support ***********************/

		// Make the editing area bigger than default.
		height: 500,

		// An array of stylesheets to style the WYSIWYG area.
		// Note: it is recommended to keep your own styles in a separate file in order to make future updates painless.
		contentsCss: [ 'https://cdn.ckeditor.com/4.8.0/full-all/contents.css', 'mystyles.css' ],

		// This is optional, but will let us define multiple different styles for multiple editors using the same CSS file.
		bodyClass: 'document-editor',

		// Reduce the list of block elements listed in the Format dropdown to the most commonly used.
		format_tags: 'p;h1;h2;h3;pre',

		// Simplify the Image and Link dialog windows. The "Advanced" tab is not needed in most cases.
		removeDialogTabs: 'image:advanced;link:advanced',

		// Define the list of styles which should be available in the Styles dropdown list.
		// If the "class" attribute is used to style an element, make sure to define the style for the class in "mystyles.css"
		// (and on your website so that it rendered in the same way).
		// Note: by default CKEditor looks for styles.js file. Defining stylesSet inline (as below) stops CKEditor from loading
		// that file, which means one HTTP request less (and a faster startup).
		// For more information see https://ckeditor.com/docs/ckeditor4/latest/features/styles.html
		stylesSet: [
			/* Inline Styles */
			{ name: 'Marker', element: 'span', attributes: { 'class': 'marker' } },
			{ name: 'Cited Work', element: 'cite' },
			{ name: 'Inline Quotation', element: 'q' },

			/* Object Styles */
			{
				name: 'Special Container',
				element: 'div',
				styles: {
					padding: '5px 10px',
					background: '#eee',
					border: '1px solid #ccc'
				}
			},
			{
				name: 'Compact table',
				element: 'table',
				attributes: {
					cellpadding: '5',
					cellspacing: '0',
					border: '1',
					bordercolor: '#ccc'
				},
				styles: {
					'border-collapse': 'collapse'
				}
			},
			{ name: 'Borderless Table', element: 'table', styles: { 'border-style': 'hidden', 'background-color': '#E6E6FA' } },
			{ name: 'Square Bulleted List', element: 'ul', styles: { 'list-style-type': 'square' } }
		]
	} );
    $.fn.modal.Constructor.prototype._enforceFocus = function() {
        modal_this = this
        $(document).on('focusin', function (e) {
            if (modal_this.$element[0] !== e.target && !modal_this.$element.has(e.target).length 
            && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_select') 
            && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_text')) {
            modal_this.$element.focus()
            }
        })
    };
</script>

</body>
</html>