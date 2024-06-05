@extends('designer.layouts.app')
@push('styles')
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/super-build/ckeditor.js"></script>
@endpush
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Edit Project</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('designer.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('designer.projects')}}">Manage Projects</a></li>
                    <li class="breadcrumb-item active">Edit Project</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<form action="{{route('designer.editProjects')}}" method="post" id="addProjectForm" enctype="multipart/form-data">
    @csrf
    <input type="text" value="{{$project->id}}" name="id" hidden>
    <div class="row">
        <div class="col-xxl-12">
            <div class="card mt-xxl-n5">
                <div class="card-header d-flex align-items-center">
                    <h5 class="card-title mb-0 flex-grow-1">
                        Edit Project Details
                    </h5>
                    <div>
                        <a id="addRow" href="{{route('designer.projects')}}" class="btn btn-primary btn-sm"><i data-feather="arrow-left"></i> Go Back</a>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="firstnameInput" class="form-label">
                                            Project Title</label>
                                        <input type="text" class="form-control" name="title" required value="{{$project->title}}">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="lastnameInput" class="form-label">Banner Image</label>
                                        <input type="file" class="form-control" name="banner" id="banner" accept="image/*">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="lastnameInput" class="form-label">Blog Subtitle</label>
                                        <textarea class="form-control" name="subtitle" id="subtitle" rows="3" required>{{$project->subtitle}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <!-- perview of banner image -->
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="lastnameInput" class="form-label">Banner Preview</label>
                                        <img src="{{asset('uploads/projects/' . $project->banner)}}" id="bannerPreview" class="img-fluid" alt="preview" style="height: auto; width: 480px; overflow:auto;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3 pb-2">
                                <label for="exampleFormControlTextarea" class="form-label">Description</label>
                                <textarea class="form-control" id="content" name="description" placeholder="Enter the Description" rows="10">{!! $project->description !!}</textarea>
                            </div>
                        </div>
                        <!--end col-->

                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="submit" class="btn btn-secondary">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
</form>
@endsection
@push('scripts')

<script src="{{asset('clientSideAssets/jquery/jquery-3.7.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('designer_assets/js/toastify.js')}}"></script>
<script>
    var bannerInput = document.getElementById('banner');
    var bannerPreview = document.getElementById('bannerPreview');
    bannerInput.addEventListener('change', function() {
        var file = this.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function() {
                bannerPreview.src = reader.result;
            }
            reader.readAsDataURL(file);
        }
    });
    document.addEventListener('DOMContentLoaded', function() {
        var error = "{{session('error') ?? ''}}";
        if (error) {
            Toastify({
                text: error,
                duration: 3000,
                close: true,
                gravity: "top",
                position: 'right',
                backgroundColor: "linear-gradient(to right, #ff416c, #ff4b2b)",
            }).showToast();
        }

    });
</script>
<script>
    CKEDITOR.ClassicEditor.create(document.getElementById("content"), {
        ckfinder: {
            uploadUrl: "{{ route('ckeditor.upload').'?_token='.csrf_token() }}"
        },
        toolbar: {
            items: [
                'selectAll', '|',
                'heading', '|',
                'bold', 'italic', 'underline', 'removeFormat', '|',
                'undo', 'redo',
                'fontSize', '|',
                'alignment', '|',
                'link', 'insertImage', 'blockQuote', 'mediaEmbed', '|',
            ],
        },
        list: {
            properties: {
                styles: true,
                startIndex: true,
                reversed: true
            }
        },
        heading: {
            options: [{
                    model: 'paragraph',
                    title: 'Paragraph',
                    class: 'ck-heading_paragraph'
                },
                {
                    model: 'heading1',
                    view: 'h1',
                    title: 'Heading 1',
                    class: 'ck-heading_heading1'
                },
                {
                    model: 'heading2',
                    view: 'h2',
                    title: 'Heading 2',
                    class: 'ck-heading_heading2'
                },
                {
                    model: 'heading3',
                    view: 'h3',
                    title: 'Heading 3',
                    class: 'ck-heading_heading3'
                },
            ]
        },
        fontSize: {
            options: [10, 12, 14, 'default', 18, 20, 22],
            supportAllValues: true
        },

        link: {
            decorators: {
                addTargetToExternalLinks: true,
                defaultProtocol: 'https://',
                toggleDownloadable: {
                    mode: 'manual',
                    label: 'Downloadable',
                    attributes: {
                        download: 'file'
                    }
                }
            }
        },

        removePlugins: [
            // These two are commercial, but you can try them out without registering to a trial.
            // 'ExportPdf',
            // 'ExportWord',
            'AIAssistant',
            'CKBox',
            'CKFinder',
            'RealTimeCollaborativeComments',
            'RealTimeCollaborativeTrackChanges',
            'RealTimeCollaborativeRevisionHistory',
            'PresenceList',
            'Comments',
            'TrackChanges',
            'TrackChangesData',
            'RevisionHistory',
            'Pagination',
            'WProofreader',
            // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
            // from a local file system (file://) - load this site via HTTP server if you enable MathType.
            'MathType',
            // The following features are part of the Productivity Pack and require additional license.
            'SlashCommand',
            'Template',
            'DocumentOutline',
            'FormatPainter',
            'TableOfContents',
            'PasteFromOfficeEnhanced'
        ]
    });
</script>
@endpush