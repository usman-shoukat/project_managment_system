import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { EditSubCategoryComponent } from './edit-sub-category.component';
import { EditSubCategoryRoutingModule } from './edit-sub-category-routing.module';
import { NgSelect2Module } from 'ng-select2';

@NgModule({
  declarations: [ EditSubCategoryComponent ],
  imports: [
    CommonModule,
    EditSubCategoryRoutingModule,
    NgSelect2Module
  ]
})
export class EditSubCategoryModule { }
