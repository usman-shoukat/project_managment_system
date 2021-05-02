import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { DataTablesModule } from 'angular-datatables';
import { SubCategoriesRoutingModule } from './sub-categories-routing.module';
import { SubCategoriesComponent } from './sub-categories.component';

@NgModule({
  declarations: [SubCategoriesComponent],
  imports: [CommonModule, SubCategoriesRoutingModule, DataTablesModule],
})
export class SubCategoriesModule {}
