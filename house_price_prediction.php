<?php
include("header.php");
?>

<div class="font-sans antialiased bg-grey-lightest">
  <!-- Content -->
  <div class="w-full bg-grey-lightest">
    <div class="container mx-auto py-8">
      <div class="w-5/6 lg:w-1/2 mx-auto bg-white rounded shadow">
            <div class="py-2 px-8 text-black text-xl text-center font-bold">
                House Price Prediction
            </div>
            <div class="py-2 px-8 text-gray-600 text-sm border-b border-grey-lighter text-center">
                <p>
                    This project demonstrates using multiple linear regression for a house price prediction problem.
                </p>
                <p>
                    The data used in this problem is Boston housing price dataset
                </p>
            </div>
            <div class="py-4 px-8">
                <div class="flex mb-4">
                    <div class="w-1/2 mr-1">
                        <label class="block text-gray-600 text-sm font-bold mb-2" for="first_name">Lotsize (in square feet)</label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-600" id="first_name" type="text" placeholder="Lotsize (in square feet)">
                    </div>
                    <div class="w-1/2 ml-1">
                        <label class="block text-gray-600 text-sm font-bold mb-2" for="last_name">Number of Bedrooms</label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-600" id="last_name" type="text" placeholder="Number of Bedrooms">
                    </div>
                </div>
                <div class="flex mb-4">
                    <div class="w-1/2 mr-1">
                        <label class="block text-gray-600 text-sm font-bold mb-2" for="first_name">Number of Bathrooms</label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-600" id="first_name" type="text" placeholder="Number of Bathrooms">
                    </div>
                    <div class="w-1/2 ml-1">
                        <label class="block text-gray-600 text-sm font-bold mb-2" for="last_name">Number of Garage Places</label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-600" id="last_name" type="text" placeholder="Number of Garage Places">
                    </div>
                </div>
                <div class="flex mb-4">
                    <div class="w-1/2 mr-1">
                        <label class="block text-gray-600 text-sm font-bold mb-2" for="first_name">Number of Floors</label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-600" id="first_name" type="text" placeholder="Number of Floors">
                    </div>
                </div>

                <div class="flex mb-4">
                    <div class="w-1/2 mr-1">
                        <label class="block text-left" style="max-width: 400px;">
                            <span class="block text-gray-600 text-sm font-bold mb-2">What about driveway ,want one?</span>
                            <select class="form-select block w-full mt-1 ">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </label>
                    </div>
                    <div class="w-1/2 mr-1">
                        <label class="block text-left" style="max-width: 400px;">
                            <span class="block text-gray-600 text-sm font-bold mb-2">Do you want recreational room? </span>
                            <select class="form-select block w-full mt-1 ">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="flex mb-4">
                    <div class="w-1/2 mr-1">
                        <label class="block text-left" style="max-width: 400px;">
                            <span class="block text-gray-600 text-sm font-bold mb-2">Want a full basement?</span>
                            <select class="form-select block w-full mt-1 ">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </label>
                    </div>
                    <div class="w-1/2 mr-1">
                        <label class="block text-left" style="max-width: 400px;">
                            <span class="block text-gray-600 text-sm font-bold mb-2">Looking for gas hot water in the house?</span>
                            <select class="form-select block w-full mt-1 ">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="flex mb-4">
                    <div class="w-1/2 mr-1">
                        <label class="block text-left" style="max-width: 400px;">
                            <span class="block text-gray-600 text-sm font-bold mb-2">Do you want air conditioning?</span>
                            <select class="form-select block w-full mt-1 ">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </label>
                    </div>
                    <div class="w-1/2 mr-1">
                        <label class="block text-left" style="max-width: 400px;">
                            <span class="block text-gray-600 text-sm font-bold mb-2">Do you have a prefered area?</span>
                            <select class="form-select block w-full mt-1 ">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="flex mb-4 text-center">
                <div class="w-full mr-1">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
  Submit
</button>
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