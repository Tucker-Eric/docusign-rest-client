<?php

namespace DocuSign\Rest\Api;

/**
 * Class Workspaces
 * @method \DocuSign\eSign\Client\ApiClient getApiClient() Get API client
 * @method \DocuSign\eSign\Api\WorkspacesApi setApiClient(\DocuSign\eSign\Client\ApiClient $apiClient) Set the API client
 * @method \DocuSign\eSign\Model\Workspace createWorkspace(\DocuSign\eSign\Model\Workspace $workspace = null) Create a Workspace
 * @method \DocuSign\eSign\Model\WorkspaceItem createWorkspaceFile(string $folder_id, string $workspace_id) Creates a workspace file
 * @method \DocuSign\eSign\Model\Workspace deleteWorkspace(string $workspace_id) Delete Workspace
 * @method void deleteWorkspaceFolderItems(string $folder_id, string $workspace_id, \DocuSign\eSign\Model\WorkspaceItemList $workspace_item_list = null) Deletes workspace one or more specific files
 * @method \DocuSign\eSign\Model\Workspace getWorkspace(string $workspace_id) Get Workspace
 * @method void getWorkspaceFile(string $file_id, string $folder_id, string $workspace_id) Get Workspace File
 * @method \DocuSign\eSign\Model\PageImages listWorkspaceFilePages(string $file_id, string $folder_id, string $workspace_id) List File Pages
 * @method \DocuSign\eSign\Model\WorkspaceFolderContents listWorkspaceFolderItems(string $folder_id, string $workspace_id) List Workspace Folder Contents
 * @method \DocuSign\eSign\Model\WorkspaceList listWorkspaces() List Workspaces
 * @method \DocuSign\eSign\Model\Workspace updateWorkspace(string $workspace_id, \DocuSign\eSign\Model\Workspace $workspace = null) Update Workspace
 * @method \DocuSign\eSign\Model\WorkspaceItem updateWorkspaceFile(string $file_id, string $folder_id, string $workspace_id) Update Workspace File Metadata
 */
class Workspaces extends BaseApi
{

}