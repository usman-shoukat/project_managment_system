import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AddSubCategoryComponent } from './add-sub-category.component';

const routes: Routes = [
	{
		path : '',
		component : AddSubCategoryComponent
	}
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class AddSubCategoryRoutingModule { }
