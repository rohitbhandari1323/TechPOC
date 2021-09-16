<?php
include("header.php");
?>

<div class="font-sans antialiased bg-grey-lightest">
  <!-- Content -->
  <div class="w-full bg-grey-lightest">
    <div class="container mx-auto">
      <div class="">
            
            <div>
                
                <div class="flex">
                    <div class="w-full">
                        
                    <div class="py-6 bg-gray-300 px-2">
                    <div class="py-2 px-8 text-black text-xl text-center font-bold">
                    Check for Image Distortion
            </div>
            <div class="py-2 px-8 text-gray-600 text-sm text-center">
                <p>
                Upload the Images for distortion estimation
                </p>
            </div>
    <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
        
        <div class="md:flex">
            
            <div class="w-full px-4 py-6 ">
                <div class="mb-1"> <span class="font-semibold text-md text-gray-400">
                Upload the reference image
                </span>
            </div>
                <div class="mb-1">
                    <div class="relative border-dotted h-32 rounded-lg border-dashed border-2 border-blue-700 bg-gray-100 flex justify-center items-center">
                        <div class="absolute">
                            <div class="flex flex-col items-center"> <i class="fa fa-folder-open fa-3x text-blue-700"></i> <span class="block text-gray-400 font-normal">Attach you files here</span> </div>
                        </div> <input type="file" class="h-full w-full opacity-0" name="">
                    </div>
                </div>
                <div class="mb-1"> <span class="font-semibold text-md text-gray-400">
                Upload the distorted image
                </span>
            </div>
                <div class="mb-1">
                    <div class="relative border-dotted h-32 rounded-lg border-dashed border-2 border-blue-700 bg-gray-100 flex justify-center items-center">
                        <div class="absolute">
                            <div class="flex flex-col items-center"> <i class="fa fa-folder-open fa-3x text-blue-700"></i> <span class="block text-gray-400 font-normal">Attach you files here</span> </div>
                        </div> <input type="file" class="h-full w-full opacity-0" name="">
                    </div>
                </div>
                <div class="mt-3 text-right"> <button class="ml-2 h-10 w-32 bg-blue-600 rounded text-white hover:bg-blue-700">Submit</button> </div>
            </div>
        </div>
    </div>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
<?php
include("footer.php");
?>