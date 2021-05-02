import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { SearchRoutingModule } from './search-routing.module';
import { SearchComponent } from './search.component';
import { NgSelect2Module } from 'ng-select2';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { CrystalLightboxModule } from '@crystalui/angular-lightbox';
import { TooltipModule } from 'ng2-tooltip-directive';

@NgModule({
  declarations: [SearchComponent],
  imports: [
    CommonModule,
    SearchRoutingModule,
    NgbModule,
    CrystalLightboxModule,
    TooltipModule,
    NgSelect2Module,
  ],
})
export class SearchModule {}
