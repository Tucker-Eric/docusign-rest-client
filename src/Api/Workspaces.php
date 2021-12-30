<?php

namespace DocuSign\Rest\Api;

use DocuSign\eSign\Api as Api;
use \DocuSign\eSign\Model as Models;

/**
 * Class Workspaces
 * @method Api\WorkspacesApi getClient()
 * @method DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method self setApiClient(ApiClient $apiClient) Set the API client
 * @method string updateResourcePath(string $resourcePath, string $baseName, string $paramName) Update
 * @method Models\Workspace createWorkspace(Models\Workspace $workspace = null) Create a Workspace
 * @method Models\WorkspaceItem createWorkspaceFile(?string $folder_id, ?string $workspace_id) Creates a workspace file
 * @method Models\Workspace deleteWorkspace(?string $workspace_id) Delete Workspace
 * @method mixed deleteWorkspaceFolderItems(?string $folder_id, ?string $workspace_id, Models\WorkspaceItemList $workspace_item_list = null) Deletes workspace one or more specific files
 * @method Models\Workspace getWorkspace(?string $workspace_id) Get Workspace
 * @method Api\WorkspacesApi\GetWorkspaceFileOptions getWorkspaceFileOptions(array $options = ['set_is_download' => null, 'set_pdf_version' => null])
 * @method mixed getWorkspaceFile(?string $file_id, ?string $folder_id, ?string $workspace_id, Api\WorkspacesApi\GetWorkspaceFileOptions $options = null) Get Workspace File
 * @method Api\WorkspacesApi\ListWorkspaceFilePagesOptions listWorkspaceFilePagesOptions(array $options = ['set_count' => null, 'set_dpi' => null, 'set_max_height' => null, 'set_max_width' => null, 'set_start_position' => null])
 * @method Models\PageImages listWorkspaceFilePages(?string $file_id, ?string $folder_id, ?string $workspace_id, Api\WorkspacesApi\ListWorkspaceFilePagesOptions $options = null) List File Pages
 * @method Api\WorkspacesApi\ListWorkspaceFolderItemsOptions listWorkspaceFolderItemsOptions(array $options = ['set_count' => null, 'set_include_files' => null, 'set_include_sub_folders' => null, 'set_include_thumbnails' => null, 'set_include_user_detail' => null, 'set_start_position' => null, 'set_workspace_user_id' => null])
 * @method Models\WorkspaceFolderContents listWorkspaceFolderItems(?string $folder_id, ?string $workspace_id, Api\WorkspacesApi\ListWorkspaceFolderItemsOptions $options = null) List Workspace Folder Contents
 * @method Models\WorkspaceList listWorkspaces() List Workspaces
 * @method Models\Workspace updateWorkspace(?string $workspace_id, Models\Workspace $workspace = null) Update Workspace
 * @method Models\WorkspaceItem updateWorkspaceFile(?string $file_id, ?string $folder_id, ?string $workspace_id) Update Workspace File Metadata
 */
class Workspaces extends BaseApi
{
    protected $methodsWithAccountId = [
        'createWorkspace',
        'createWorkspaceWithHttpInfo',
        'createWorkspaceFile',
        'createWorkspaceFileWithHttpInfo',
        'deleteWorkspace',
        'deleteWorkspaceWithHttpInfo',
        'deleteWorkspaceFolderItems',
        'deleteWorkspaceFolderItemsWithHttpInfo',
        'getWorkspace',
        'getWorkspaceWithHttpInfo',
        'getWorkspaceFile',
        'getWorkspaceFileWithHttpInfo',
        'listWorkspaceFilePages',
        'listWorkspaceFilePagesWithHttpInfo',
        'listWorkspaceFolderItems',
        'listWorkspaceFolderItemsWithHttpInfo',
        'listWorkspaces',
        'listWorkspacesWithHttpInfo',
        'updateWorkspace',
        'updateWorkspaceWithHttpInfo',
        'updateWorkspaceFile',
        'updateWorkspaceFileWithHttpInfo'
];
}