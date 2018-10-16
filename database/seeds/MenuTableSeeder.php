<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(config('access.menus_table'))->truncate();
        $menu = [
            'id'                    => 1,
            'type'                  => 'backend',
            'name'                  => 'Backend Sidebar Menu',
            'items'                 => '[{"id":11,"name":"Access Management","url":"","url_type":"route","open_in_new_tab":0,"icon":"fa-users","view_permission_id":"view-access-management","content":"Access Management","children":[{"id":12,"name":"User Management","url":"admin.access.user.index","url_type":"route","open_in_new_tab":0,"view_permission_id":"view-user-management","content":"User Management"},{"id":13,"name":"Role Management","url":"admin.access.role.index","url_type":"route","open_in_new_tab":0,"view_permission_id":"view-role-management","content":"Role Management"},{"id":14,"name":"Permission Management","url":"admin.access.permission.index","url_type":"route","open_in_new_tab":0,"view_permission_id":"view-permission-management","content":"Permission Management"}]},{"view_permission_id":"view-property-management","icon":"fa-home","open_in_new_tab":0,"url_type":"route","url":"","name":"Property Management","id":20,"content":"Property Management","children":[{"id":21,"name":"MLS Management","url":"admin.mlsproperties.index","url_type":"route","open_in_new_tab":0,"icon":"","view_permission_id":"view-mls-management","content":"MLS Management"},{"view_permission_id":"view-nonmls-management","icon":"","open_in_new_tab":0,"url_type":"route","url":"admin.nonmlsproperties.index","name":"Non MLS Management","id":22,"content":"Non MLS Management"}]},{"view_permission_id":"view-school-management","icon":"fa-graduation-cap","open_in_new_tab":0,"url_type":"route","url":"admin.schools.index","name":"School Management","id":23,"content":"School Management"},{"id":24,"name":"Contact Management","url":"","url_type":"route","open_in_new_tab":0,"icon":"fa-inbox","view_permission_id":"view-contact","content":"Contact Management"},{"id":15,"name":"Blog Management","url":"","url_type":"route","open_in_new_tab":0,"icon":"fa-commenting","view_permission_id":"view-blog","content":"Blog Management","children":[{"id":16,"name":"Blog Category Management","url":"admin.blogCategories.index","url_type":"route","open_in_new_tab":0,"view_permission_id":"view-blog-category","content":"Blog Category Management"},{"id":17,"name":"Blog Tag Management","url":"admin.blogTags.index","url_type":"route","open_in_new_tab":0,"view_permission_id":"view-blog-tag","content":"Blog Tag Management"},{"id":18,"name":"Blog Management","url":"admin.blogs.index","url_type":"route","open_in_new_tab":0,"view_permission_id":"view-blog","content":"Blog Management"}]},{"view_permission_id":"view-faq","icon":"fa-question-circle","open_in_new_tab":0,"url_type":"route","url":"admin.faqs.index","name":"Faq Management","id":19,"content":"Faq Management"},{"id":2,"name":"Pages","url":"admin.pages.index","url_type":"route","open_in_new_tab":0,"icon":"fa-file-text","view_permission_id":"view-page","content":"Pages"},{"id":8,"name":"Email Templates","url":"admin.emailtemplates.index","url_type":"route","open_in_new_tab":0,"icon":"fa-envelope","view_permission_id":"view-email-template","content":"Email Templates"},{"id":9,"name":"Settings","url":"admin.settings.edit?id=1","url_type":"route","open_in_new_tab":0,"icon":"fa-gear","view_permission_id":"edit-settings","content":"Settings"},{"id":1,"name":"Module","url":"admin.modules.index","url_type":"route","open_in_new_tab":0,"icon":"fa-wrench","view_permission_id":"view-module","content":"Module"},{"id":3,"name":"Menus","url":"admin.menus.index","url_type":"route","open_in_new_tab":0,"icon":"fa-bars","view_permission_id":"view-menu","content":"Menus"}]',
            'created_by'            => 1,
            'created_at'            => Carbon::now(),
        ];

        DB::table(config('access.menus_table'))->insert($menu);
    }
}
