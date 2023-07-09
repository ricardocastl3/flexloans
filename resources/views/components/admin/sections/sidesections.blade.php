<div

    x-show="openSidebar"
    x-transition:enter="transform transition-transform duration-300"
    x-transition:enter-start="-translate-x-full"
    x-transition:enter-end="translate-0"
    x-transition:leave="transform transition-transform duration-300"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="-translate-x-full"
    x-ref="fullSideSection"
    class="fixed z-20 inset-y-0 sm:w-80 w-64 p-10 bg-gray-900 border border-gray-800 rounded-r-3xl sm:pl-16 pl-4">

    <x-admin.sections.each.dashboard />
    <x-admin.sections.each.wallet />
    <x-admin.sections.each.solicitation />
    <x-admin.sections.each.users />
</div>
<div
@click="openSidebar=false"
x-show="openSidebar"
class="sm:flex hidden h-screen fixed inset-0 z-10 bg-gray-900/90 ">

</div>
