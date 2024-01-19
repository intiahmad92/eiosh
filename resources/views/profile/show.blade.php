<x-app-layout>
    <style>
        
        .navbar-transparent {
            background-color: #2a2a2a !important;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            z-index: 299;
            transition: all 0.25s;
            -webkit-transition: all 0.25s;
        }
        /* CSS Document */

        .profile-thum-wrapper {
            width: 100%;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .thum-holder {
            text-align: center;
            position: relative;
            border-radius: 10px;
            width: 230px;
            height: 90px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            /*margin-bottom: 20px;*/
        }

        .thum-holder .thum {
            height: 100%;
            width: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: center;
            object-position: center;
        }

        .thum-holder .upload-file-block,
        .thum-holder .upload-loader {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(90, 92, 105, 0.7);
            color: #f8f9fc;
            font-size: 12px;
            font-weight: 600;
            opacity: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s;
        }

        .thum-holder .upload-file-block {
            cursor: pointer;
        }

        .thum-holder:hover .upload-file-block,
        .uploadProfileInput:focus ~ .upload-file-block {
            opacity: 1;
        }

        .thum-holder.uploadInProgress .upload-file-block {
            display: none;
        }

        .thum-holder.uploadInProgress .upload-loader {
            opacity: 1;
        }
    </style>
    
    <div class="container" style="    margin-top: 145px;">
        <div class="row">
            <aside class="col-md-12 sidebar" role="complementary">
                <h1 class="entry-content">
                    <blockquote>
                       {{ __('Profile') }}
                    </blockquote>
                </h1>
                <!-- End .entry-content -->
            </aside>
        </div>
    </div>
    

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
