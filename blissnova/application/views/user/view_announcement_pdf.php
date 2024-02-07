   <?php include 'header.php'; ?>
 <style>
        #pdf-viewer {
            width: 100%;
            height: 100%;
            border: none;
        }
#pdf-viewer {
  max-width: 100%;
  overflow-x: auto;
}
.card {
    display: flex;
    justify-content: center;
    align-items: center;
}
.pdf-page {
  display: block;
  width: 100%;
  height: auto;
}
    </style>

 <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row invoice-preview">
    <!-- PDF Viewer -->
<div class="col-xl-9 col-md-8 col-12 mb-md-0 mb-4">
    <div class="card">
  <div id="pdf-viewer"></div>
</div>
</div>
<!-- /PDF Viewer -->

<!-- PDF Actions -->
<div class="col-xl-3 col-md-4 col-12 invoice-actions">
  <div class="card">
    <div class="card-body">
      <a class="btn btn-outline-secondary d-grid w-100 mb-3" href="<?=BASEURL?>assets/announcement/<?=$pdf_file?>" target="_blank">Download</a>
      <a class="btn btn-outline-secondary d-grid w-100 mb-3" target="_blank" href="<?=BASEURL?>assets/announcement/<?=$pdf_file?>">Print</a>
    </div>
  </div>
</div>
<!-- /PDF Actions -->
        </div>
    </div>
    <!-- /Content -->



    <?php include 'footer.php'; ?>

    <!-- PDF.js Library -->
    <!--<script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>-->
    // <script>
    //     // PDF.js configuration
    //     const pdfUrl = "<?=BASEURL?>assets/announcement/<?=$pdf_file?>";
    //     const canvas = document.getElementById("pdf-viewer");
    //     const ctx = canvas.getContext("2d");

    //     // Load and render the PDF
    //     const renderPDF = async () => {
    //         const pdfData = await fetch(pdfUrl).then(response => response.arrayBuffer());
    //         const pdf = await pdfjsLib.getDocument({ data: pdfData }).promise;
    //         const page = await pdf.getPage(1);
    //         const scale = 1.5;
    //         const viewport = page.getViewport({ scale });

    //         canvas.width = viewport.width;
    //         canvas.height = viewport.height;

    //         const renderContext = {
    //             canvasContext: ctx,
    //             viewport: viewport
    //         };

    //         await page.render(renderContext);
    //     };

    //     // Call the renderPDF function
    //     renderPDF().catch(error => console.error(error));
    // </script>





<!-- PDF.js Library -->
<script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
<script>
  // PDF.js configuration
  const pdfUrl = "<?=BASEURL?>assets/announcement/<?=$pdf_file?>";
  const viewerContainer = document.getElementById("pdf-viewer");

  // Load and render the PDF
  const renderPDF = async () => {
    const pdfData = await fetch(pdfUrl).then(response => response.arrayBuffer());
    const pdf = await pdfjsLib.getDocument({ data: pdfData }).promise;
    const numPages = pdf.numPages;

    for (let pageNumber = 1; pageNumber <= numPages; pageNumber++) {
      const page = await pdf.getPage(pageNumber);
      const scale = 1.5;
      const viewport = page.getViewport({ scale });

      const canvas = document.createElement("canvas");
      canvas.className = "pdf-page";
      canvas.width = viewport.width;
      canvas.height = viewport.height;
      viewerContainer.appendChild(canvas);

      const ctx = canvas.getContext("2d");
      const renderContext = {
        canvasContext: ctx,
        viewport: viewport
      };

      await page.render(renderContext);
    }
  };

  // Call the renderPDF function
  renderPDF().catch(error => console.error(error));
</script>

 <script>
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script> 
  
  
  