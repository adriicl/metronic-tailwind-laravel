<x-default-layout>
      <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card min-w-full">
              <div class="card-header">
                  <h3 class="card-title">Personal Info</h3>
              </div>
              <div class="card-table scrollable-x-auto pb-3">
                  <table class="table align-middle text-sm text-gray-500">
                      <!-- Avatar -->
                      <tr>
                          <td class="py-2 min-w-28 text-gray-600 font-normal">Photo</td>
                          <td class="py-2 text-gray700 font-normal min-w-32 text-2sm">
                              150x150px JPEG, PNG Image
                          </td>
                          <td class="py-2 text-center">
                              <div class="flex justify-center items-center">
                                  <div class="image-input size-16 relative" data-image-input="true">
                                      <input accept=".png, .jpg, .jpeg" name="avatar" type="file" class="absolute inset-0 opacity-0 cursor-pointer z-10" />
                                      
                                      <div class="image-input-placeholder rounded-full border-2 border-success image-input-empty:border-gray-300"
                                           style="background-image:url('{{ asset('assets/media/avatars/blank.png') }}')">
                                          <div class="image-input-preview rounded-full"
                                               style="background-image:url('{{ asset('assets/media/avatars/300-2.png') }}')"></div>
                                          <div class="flex items-center justify-center cursor-pointer h-5 left-0 right-0 bottom-0 bg-dark-clarity absolute">
                                              <svg class="fill-light opacity-80" height="12" viewBox="0 0 14 12" width="14"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M11.6665 2.64585H11.2232C11.0873...Z" fill="" />
                                                  <path d="M7 8.77087C8.20812 8.77087..." fill="" />
                                              </svg>
                                          </div>
                                      </div>
                                      <button type="button"
                                              class="btn btn-icon btn-icon-xs btn-light shadow-default absolute z-10 size-5 -top-0.5 -end-0.5 rounded-full"
                                              onclick="removeAvatar()"
                                              data-tooltip="#image_input_tooltip"
                                              data-tooltip-trigger="hover">
                                          <i class="ki-filled ki-cross"></i>
                                      </button>
                                      <span class="tooltip" id="image_input_tooltip">
                                          Click to remove or revert
                                      </span>
                                  </div>
                              </div>
                          </td>
                      </tr>
  
                      <!-- Name -->
                      <tr>
                          <td class="py-2 text-gray-600 font-normal">Name</td>
                          <td class="py-2 text-gray-800 font-normal text-sm">
                              <span id="name-display">Jason Tatum</span>
                              <input type="text" name="name" id="name" value="Jason Tatum"
                                     class="hidden w-full text-sm bg-transparent text-gray-800 focus:outline-none"
                                     onblur="saveName('name')"
                                     onkeydown="if(event.key === 'Enter') saveName('name')" />
                          </td>
                          <td class="py-2 text-center">
                              <a class="btn btn-sm btn-icon btn-clear btn-primary" href="#" onclick="toggleEdit(event, 'name')">
                                  <i class="ki-filled ki-notepad-edit"></i>
                              </a>
                          </td>
                      </tr>
  
                      <!-- Birthday -->
                      <tr>
                          <td class="py-3 text-gray-600 font-normal">Birthday</td>
                          <td class="py-3 text-gray-700 text-sm font-normal">28 May 1996</td>
                          <td class="py-3 text-center">
                              <a class="btn btn-sm btn-icon btn-clear btn-primary" href="#">
                                  <i class="ki-filled ki-notepad-edit"></i>
                              </a>
                          </td>
                      </tr>
  
                      <!-- Gender -->
                      <tr>
                          <td class="py-3 text-gray-600 font-normal">Gender</td>
                          <td class="py-3 text-gray-700 text-sm font-normal">Male</td>
                          <td class="py-3 text-center">
                              <a class="btn btn-sm btn-icon btn-clear btn-primary" href="#">
                                  <i class="ki-filled ki-notepad-edit"></i>
                              </a>
                          </td>
                      </tr>
  
                      <!-- Address -->
                      <tr>
                          <td class="py-3">Address</td>
                          <td class="py-3 text-gray-700 text-2sm font-normal">You have no address yet</td>
                          <td class="py-3 text-center">
                              <a class="btn btn-link btn-sm" href="#">Add</a>
                          </td>
                      </tr>
                  </table>
              </div>
          </div>
      </form>
  
      <!-- Opcional: Script para mostrar input editable -->
      <script>
          function toggleEdit(event, id) {
              event.preventDefault();
              const span = document.getElementById(id + '-display');
              const input = document.getElementById(id);
              span.classList.toggle('hidden');
              input.classList.toggle('hidden');
              input.focus();
          }
  
          function saveName(id) {
              const span = document.getElementById(id + '-display');
              const input = document.getElementById(id);
              span.textContent = input.value;
              span.classList.remove('hidden');
              input.classList.add('hidden');
          }
  
          function removeAvatar() {
              const fileInput = document.querySelector('input[name="avatar"]');
              if (fileInput) fileInput.value = '';
          }
      </script>
  </x-default-layout>
  