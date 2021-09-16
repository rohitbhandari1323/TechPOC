<?php
include("header.php");
?>

<div class="font-sans antialiased bg-grey-lightest">
    <div class="w-full bg-grey-lightest">
        <div class="container mx-auto">               
            <div class="flex">
                <div class="w-full">
                    <div class="py-6 px-2">
                        <div class="py-2 px-8 text-black text-xl text-center font-bold">
                            Sentiment Analysis of Glassdoor Reviews
                        </div>
                        <center>
                            <div class="py-2 px-12 text-gray-600 text-sm w-3/5 h-1/2 ">
                                <center>
                                    <div class="bg-white p-6 w-full shadow-lg">
                                        <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="10" placeholder="Enter review here..."></textarea>
                                    </div>
                                    <div class="py-4">
                                        <button type="button" class="bg-gray-300 text-gray-900 rounded hover:bg-gray-200 px-4 py-2 focus:outline-none font-semibold">Predict</button>

                                    </div>
                                </center>
                            </div>
                        </center>
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