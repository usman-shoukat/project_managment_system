import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { EditRatingTypeComponent } from './edit-rating-type.component';

const routes: Routes = [
	{
		path : '',
		component : EditRatingTypeComponent
	}
];


@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class EditRatingTypeRoutingModule { }
