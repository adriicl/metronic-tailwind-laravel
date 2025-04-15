<div class="sidebar dark:bg-coal-600 bg-light border-r border-r-gray-200 dark:border-r-coal-100 fixed top-0 bottom-0 z-20 hidden lg:flex flex-col items-stretch shrink-0"
	data-drawer="true" data-drawer-class="drawer drawer-start top-0 bottom-0" data-drawer-enable="true|lg:false"
	id="sidebar">
	<div class="sidebar-header hidden lg:flex items-center relative justify-between px-3 lg:px-6 shrink-0"
		id="sidebar_header">
		<a class="dark:hidden" href="{{ route('welcome') }}">
			<img class="default-logo min-h-[22px] max-w-none" src="assets/media/app/default-logo.svg" />
			<img class="small-logo min-h-[22px] max-w-none" src="assets/media/app/mini-logo.svg" />
		</a>
		<a class="hidden dark:block" href="{{ route('welcome') }}">
			<img class="default-logo min-h-[22px] max-w-none" src="assets/media/app/default-logo-dark.svg" />
			<img class="small-logo min-h-[22px] max-w-none" src="assets/media/app/mini-logo.svg" />
		</a>
		<button
			class="btn btn-icon btn-icon-md size-[30px] rounded-lg border border-gray-200 dark:border-gray-300 bg-light text-gray-500 hover:text-gray-700 toggle absolute left-full top-2/4 -translate-x-2/4 -translate-y-2/4"
			data-toggle="body" data-toggle-class="sidebar-collapse" id="sidebar_toggle">
			<i class="ki-filled ki-black-left-line toggle-active:rotate-180 transition-all duration-300">
			</i>
		</button>
	</div>
	<div class="sidebar-content flex grow shrink-0 py-5 pr-2" id="sidebar_content">
		<div class="scrollable-y-hover grow shrink-0 flex pl-2 lg:pl-5 pr-1 lg:pr-3" data-scrollable="true"
			data-scrollable-dependencies="#sidebar_header" data-scrollable-height="auto" data-scrollable-offset="0px"
			data-scrollable-wrappers="#sidebar_content" id="sidebar_scrollable">
			<div class="menu flex flex-col grow gap-0.5" data-menu="true" data-menu-accordion-expand-all="false"
				id="sidebar_menu">
				{{-- <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
				</div> --}}
				<div class="menu-item pt-2.25 pb-px">
					<span class="menu-heading uppercase pl-[10px] pr-[10px] text-2sm font-semibold text-gray-500">
						User
					</span>
				</div>
				{{-- <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
				</div> --}}

				<div class="menu-item pt-2.25 pb-px">
					<span class="menu-heading uppercase pl-[10px] pr-[10px] text-2sm font-semibold text-gray-500">
						Apps
					</span>
				</div>
				<div class="menu-item">
					<div class="menu-label gap-[10px] pl-[10px] pr-[10px] py-[6px] border border-transparent" href=""
						tabindex="0">
						<span class="menu-icon items-start w-[20px] text-gray-500 dark:text-gray-400">
							<i class="ki-filled ki-users text-lg">
							</i>
						</span>
						<span class="menu-title text-sm font-semibold text-gray-700">
							User Management
						</span>
						<span class="menu-badge mr-[-10px]">
							<span class="badge badge-xs">
								Soon
							</span>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>