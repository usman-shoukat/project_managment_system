import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { AddSubCategoryComponent } from './add-sub-category.component';
import { AddSubCategoryRoutingModule } from './add-sub-category-routing.module';
import { NgSelect2Module } from 'ng-select2';

@NgModule({
  declarations: [ AddSubCategoryComponent ],
  imports: [
    CommonModule,
    AddSubCategoryRoutingModule,
    NgSelect2Module
  ]
})
export class AdminInvoiceModule { }
